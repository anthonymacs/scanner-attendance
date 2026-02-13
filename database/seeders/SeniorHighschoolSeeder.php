<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeniorHighSchoolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Create Strands
        $strands = [
            [
                'code' => 'STEM',
                'name' => 'Science, Technology, Engineering and Mathematics',
                'description' => 'For students who want to pursue careers in engineering, medical, IT, and science fields',
                'track' => 'Academic',
                'status' => 'active',
            ],
            [
                'code' => 'HUMSS',
                'name' => 'Humanities and Social Sciences',
                'description' => 'For students interested in journalism, communication arts, social work, education, and liberal arts',
                'track' => 'Academic',
                'status' => 'active',
            ],
            [
                'code' => 'ABM',
                'name' => 'Accountancy, Business and Management',
                'description' => 'For students who want to pursue careers in business, entrepreneurship, and finance',
                'track' => 'Academic',
                'status' => 'active',
            ],
            [
                'code' => 'GAS',
                'name' => 'General Academic Strand',
                'description' => 'For students who are undecided on their career path or want a general education',
                'track' => 'Academic',
                'status' => 'active',
            ],
            [
                'code' => 'TVL-ICT',
                'name' => 'Technical-Vocational-Livelihood - ICT',
                'description' => 'Focuses on information and communication technology skills',
                'track' => 'Technical-Vocational-Livelihood',
                'status' => 'active',
            ],
            [
                'code' => 'TVL-HE',
                'name' => 'Technical-Vocational-Livelihood - Home Economics',
                'description' => 'Focuses on culinary arts, food service, and hospitality',
                'track' => 'Technical-Vocational-Livelihood',
                'status' => 'active',
            ],
        ];

        foreach ($strands as $strand) {
            DB::table('strands')->insert(array_merge($strand, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }

        // 2. Create Sample Teachers/Users
        $teachers = [
            [
                'name' => 'Maria Santos',
                'email' => 'maria.santos@school.edu.ph',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Juan Dela Cruz',
                'email' => 'juan.delacruz@school.edu.ph',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ana Reyes',
                'email' => 'ana.reyes@school.edu.ph',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        foreach ($teachers as $teacher) {
            DB::table('users')->insert($teacher);
        }

        // 3. Create Sections
        $sections = [
            // Grade 11 STEM
            ['strand_id' => 1, 'name' => 'A', 'grade_level' => 'Grade 11', 'school_year' => '2024-2025', 'capacity' => 40, 'adviser_id' => 1, 'room' => '201'],
            ['strand_id' => 1, 'name' => 'B', 'grade_level' => 'Grade 11', 'school_year' => '2024-2025', 'capacity' => 40, 'adviser_id' => 2, 'room' => '202'],
            // Grade 12 STEM
            ['strand_id' => 1, 'name' => 'A', 'grade_level' => 'Grade 12', 'school_year' => '2024-2025', 'capacity' => 38, 'adviser_id' => 1, 'room' => '301'],
            // Grade 11 HUMSS
            ['strand_id' => 2, 'name' => 'A', 'grade_level' => 'Grade 11', 'school_year' => '2024-2025', 'capacity' => 40, 'adviser_id' => 3, 'room' => '203'],
            // Grade 11 ABM
            ['strand_id' => 3, 'name' => 'A', 'grade_level' => 'Grade 11', 'school_year' => '2024-2025', 'capacity' => 40, 'adviser_id' => 2, 'room' => '204'],
        ];

        foreach ($sections as $section) {
            DB::table('sections')->insert(array_merge($section, [
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }

        // 4. Create Core Subjects
        $subjects = [
            // Core Subjects - Required for all strands
            ['code' => 'ORAL-COM', 'name' => 'Oral Communication', 'category' => 'Core', 'strand_id' => null, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            ['code' => 'GEN-MATH', 'name' => 'General Mathematics', 'category' => 'Core', 'strand_id' => null, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            ['code' => 'EARTH-SCI', 'name' => 'Earth and Life Science', 'category' => 'Core', 'strand_id' => null, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            ['code' => 'PE-11', 'name' => 'Physical Education and Health 11', 'category' => 'Applied', 'strand_id' => null, 'grade_level' => 'Grade 11', 'semester' => 'Full Year', 'hours_per_week' => 2],
            
            // STEM Specialized Subjects
            ['code' => 'PRE-CAL', 'name' => 'Pre-Calculus', 'category' => 'Specialized', 'strand_id' => 1, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            ['code' => 'GEN-BIO1', 'name' => 'General Biology 1', 'category' => 'Specialized', 'strand_id' => 1, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            ['code' => 'GEN-CHEM1', 'name' => 'General Chemistry 1', 'category' => 'Specialized', 'strand_id' => 1, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            
            // HUMSS Specialized Subjects
            ['code' => 'INTRO-WORLD', 'name' => 'Introduction to World Religions', 'category' => 'Specialized', 'strand_id' => 2, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            ['code' => 'CW-ESSAY', 'name' => 'Creative Writing - Essay', 'category' => 'Specialized', 'strand_id' => 2, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            
            // ABM Specialized Subjects
            ['code' => 'FUND-ABM1', 'name' => 'Fundamentals of Accountancy, Business and Management 1', 'category' => 'Specialized', 'strand_id' => 3, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
            ['code' => 'BUS-MATH', 'name' => 'Business Mathematics', 'category' => 'Specialized', 'strand_id' => 3, 'grade_level' => 'Grade 11', 'semester' => '1st Semester', 'hours_per_week' => 4],
        ];

        foreach ($subjects as $subject) {
            DB::table('subjects')->insert(array_merge($subject, [
                'description' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }

        // 5. Create Sample Students for STEM 11-A
        $students = [
            [
                'student_id' => '123456789012', // LRN
                'first_name' => 'Pedro',
                'middle_name' => 'Garcia',
                'last_name' => 'Cruz',
                'email' => 'pedro.cruz@student.edu.ph',
                'phone' => '09171234567',
                'grade_level' => 'Grade 11',
                'strand_id' => 1, // STEM
                'section_id' => 1, // Section A
                'date_of_birth' => '2008-05-15',
                'gender' => 'Male',
                'guardian_name' => 'Rosa Cruz',
                'guardian_phone' => '09181234567',
            ],
            [
                'student_id' => '123456789013',
                'first_name' => 'Maria',
                'middle_name' => 'Santos',
                'last_name' => 'Reyes',
                'email' => 'maria.reyes@student.edu.ph',
                'phone' => '09171234568',
                'grade_level' => 'Grade 11',
                'strand_id' => 1, // STEM
                'section_id' => 1, // Section A
                'date_of_birth' => '2008-08-20',
                'gender' => 'Female',
                'guardian_name' => 'Jose Reyes',
                'guardian_phone' => '09181234568',
            ],
            [
                'student_id' => '123456789014',
                'first_name' => 'Juan',
                'middle_name' => 'Mercado',
                'last_name' => 'Lopez',
                'email' => 'juan.lopez@student.edu.ph',
                'phone' => '09171234569',
                'grade_level' => 'Grade 11',
                'strand_id' => 1, // STEM
                'section_id' => 1, // Section A
                'date_of_birth' => '2008-03-10',
                'gender' => 'Male',
                'guardian_name' => 'Carmen Lopez',
                'guardian_phone' => '09181234569',
            ],
        ];

        foreach ($students as $student) {
            DB::table('students')->insert(array_merge($student, [
                'address' => null,
                'photo' => null,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }

        // 6. Create Schedules for STEM 11-A (Monday schedule example)
        $schedules = [
            // Core subjects
            ['subject_id' => 1, 'section_id' => 1, 'teacher_id' => 1, 'school_year' => '2024-2025', 'day_of_week' => 'Monday', 'start_time' => '07:30', 'end_time' => '08:30', 'room' => '201'],
            ['subject_id' => 2, 'section_id' => 1, 'teacher_id' => 2, 'school_year' => '2024-2025', 'day_of_week' => 'Monday', 'start_time' => '08:30', 'end_time' => '09:30', 'room' => '201'],
            ['subject_id' => 3, 'section_id' => 1, 'teacher_id' => 3, 'school_year' => '2024-2025', 'day_of_week' => 'Monday', 'start_time' => '09:30', 'end_time' => '10:30', 'room' => '201'],
            // STEM specialized
            ['subject_id' => 5, 'section_id' => 1, 'teacher_id' => 1, 'school_year' => '2024-2025', 'day_of_week' => 'Monday', 'start_time' => '10:30', 'end_time' => '11:30', 'room' => '201'],
            ['subject_id' => 6, 'section_id' => 1, 'teacher_id' => 2, 'school_year' => '2024-2025', 'day_of_week' => 'Monday', 'start_time' => '13:00', 'end_time' => '14:00', 'room' => 'Lab 1'],
        ];

        foreach ($schedules as $schedule) {
            DB::table('schedules')->insert(array_merge($schedule, [
                'building' => 'Main Building',
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }

        // 7. Create Enrollment Records
        foreach ([1, 2, 3] as $studentId) {
            DB::table('enrollments')->insert([
                'student_id' => $studentId,
                'section_id' => 1, // STEM 11-A
                'school_year' => '2024-2025',
                'enrolled_at' => now()->subMonths(2),
                'status' => 'enrolled',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 8. Create QR Codes for students
        foreach ([1, 2, 3] as $studentId) {
            DB::table('qr_codes')->insert([
                'student_id' => $studentId,
                'qr_code' => 'QR-' . str_pad($studentId, 10, '0', STR_PAD_LEFT) . '-' . uniqid(),
                'generated_at' => now(),
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // 9. Create Default Attendance Settings
        DB::table('attendance_settings')->insert([
            'section_id' => null, // School-wide settings
            'late_threshold_minutes' => 15,
            'allow_early_checkin' => true,
            'early_checkin_minutes' => 30,
            'allow_checkout' => false,
            'require_location' => false,
            'send_notifications' => true,
            'notify_guardians' => true,
            'auto_mark_absent' => false,
            'absence_threshold' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        echo "✅ Senior High School database seeded successfully!\n";
        echo "📚 Created: 6 strands, 5 sections, 11 subjects, 3 teachers, 3 students\n";
        echo "📅 Created schedules and enrollments for STEM 11-A\n";
        echo "🔑 Default password for all teachers: 'password'\n";
    }
}