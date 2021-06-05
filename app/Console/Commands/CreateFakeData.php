<?php

namespace App\Console\Commands;

use App\Models\Achievement;
use App\Models\Article;
use App\Models\Cooperation;
use App\Models\Course;
use App\Models\Graduation;
use App\Models\Lecturer;
use App\Models\Pkm;
use App\Models\Recognition;
use App\Models\Research;
use App\Models\Semester;
use App\Models\Student;
use App\Models\StudentCourse;
use App\Models\StudentSelection;
use App\Models\Studyprogram;
use App\Models\Survey;
use Carbon\Carbon;
use Illuminate\Console\Command;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;

class CreateFakeData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'data:fake';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Artisan::call('migrate:fresh');

        $now = now();

        Achievement::factory()->count(100)->create();

        Lecturer::factory()->count(100)->create();

        Studyprogram::factory()->count(10)->create();

        $studyprogramIds = Studyprogram::all()->pluck('id');

        Student::factory()->count(100)->create();

        foreach (Student::all() as $student) {

            if ($student->is_graduated && mt_rand(0, 5) % 2 == 0) {
                $graduation = new Graduation();

                $graduation->has_job = mt_rand(0, 10) % 2 == 0;

                $graduation->has_job_at = $graduation->has_job ? $now->addMonth(mt_rand(1, 10)) : null;

                $graduation->is_job_related = mt_rand(0, 10) % 2 == 0;

                $graduation->job_type = 'Computer';

                $graduation->year = $now->year;

                $student->graduation()->save($graduation);
            }
            $studentsSelection = new StudentSelection();
            $studentsSelection->year = mt_rand(2015, 2021);

            $studentsSelection->is_accepted = mt_rand(0, 10) > 1;
            $studentsSelection->is_regular = true;
            $studentsSelection->is_transfer = mt_rand(0, 10) > 1;

            $student->studyprogram_id = $studyprogramIds->random();

            $student->save();

            $student->studentselection()->save($studentsSelection);
        }

        Course::factory()->count(10)->create();

        Survey::factory()->count(10)->create();

        $students = Student::all();
        $studentIds = $students->map(fn ($e) => $e->id)->toArray();


        $code = collect(['A', 'B', 'C', 'D']);
        foreach (Survey::all() as $survey) {

            foreach (Arr::random($studentIds, mt_rand(1, 10)) as $id) {
                $survey->students()->attach($id, ['code' => $code->random()]);
            }
        }


        $lecturers = Lecturer::all();

        Research::factory()->count(100)->create();

        $lecturerIds = $lecturers->map(fn ($e) => $e->id)->toArray();
        foreach (Research::all() as $research) {
            $research->lecturers()->attach(Arr::random($lecturerIds, mt_rand(1, 10)));
            $research->students()->attach(Arr::random($studentIds, mt_rand(1, 10)));
        }


        Cooperation::factory()->count(10)->create();


        Semester::factory()->count(10)->create();




        foreach ($lecturers as $lecture) {
            $lecture->articles()->saveMany(
                Article::factory()->count(10)->make()
            );
            $lecture->recognitions()->saveMany(
                Recognition::factory()->count(5)->make()
            );
        }


        $courses = Course::all();
        $courseIds = $courses->map(fn ($e) => $e->id)->toArray();


        $semesters = Semester::all();
        $semestersIds = $semesters->map(fn ($e) => $e->id)->toArray();

        foreach ($courses as $course) {
            foreach (Arr::random($semestersIds, mt_rand(1, 5)) as $id) {
                $course->semesters()->attach($id);
            }
        }


        Pkm::factory()->count(10)->create();

        $halved = array_chunk($courseIds, ceil(count($courseIds) / 2));

        foreach (Semester::all() as $semester) {
            foreach ($halved[0] as $cid) {
                foreach ($studentIds as $id) {
                    $finish = mt_rand(1, 10) % 2 == 0;

                    $studentcourse = new StudentCourse();

                    $studentcourse->student_id = $id;

                    $studentcourse->semester_id = $semester->id;

                    $studentcourse->course_id = $cid;

                    if ($finish) {
                        $studentcourse->ipk = mt_rand(2, 3);
                        $studentcourse->finish_at = $now;
                    }

                    $studentcourse->save();
                }
            }
        }
        foreach (Pkm::all() as $pkm) {
            foreach (Arr::random($courseIds, mt_rand(1, 10)) as $id) {
                $pkm->courses()->attach($id);
            }
            foreach (Arr::random($lecturerIds, mt_rand(1, 10)) as $id) {
                $pkm->lecturers()->attach($id);
            }

            foreach (Arr::random($studentIds, mt_rand(1, 10)) as $id) {
                $pkm->students()->attach($id);
            }
        }
        return 0;
    }
}
