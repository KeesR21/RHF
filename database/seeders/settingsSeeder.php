<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class settingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->insert([
            'name' => 'welcome',
            'value' => 'Dear Visitors, This is with great honor to have you visit Rwanda Healthcare Federation (RHF). 
                        The Rwanda Healthcare Federation (RHF) is the premier private health sector body in Rwanda with 
                        an ultimate goal of advocating for the interests of the private health sector and promoting access
                        to affordable, equitable and quality health services. The RHF brings together non-state actors in 
                        the healthcare space including but not limited to health professionals’ associations, 
                        Non-Government Organizations (NGOs) and Faith Based Organizations (FBOs). In order for the private 
                        health sector to remain engaged and continue to provide quality healthcare services to the 
                        community, improved collaboration and partnerships are critical. RHF brings together all its 
                        members for a continued dialogue and engagement towards achieving national health priorities and 
                        Sustainable Development Goals (SDGs). I welcome you to partner with us for this noble work and on 
                        behalf of RHF thank you for your interest in healthcare service delivery. Thank You',
        ]);
        DB::table('settings')->insert([
            'name' => 'mission',
            'value' => 'The Rwanda Healthcare Federation (RHF) exists to coordinate and advocate for the interests of 
                        non-state actors in Rwanda’s health sector.',
        ]);
        DB::table('settings')->insert([
            'name' => 'phone',
            'value' => '+(250) 788 898 262',
        ]);
        DB::table('settings')->insert([
            'name' => 'email',
            'value' => 'info@rhf.rw',
        ]);
        DB::table('settings')->insert([
            'name' => 'location',
            'value' => '10001, 5th Kigali, Rwanda',
        ]);
        DB::table('settings')->insert([
            'name' => 'projects_subtitle',
            'value' => 'Add this paragraph',
        ]);
        DB::table('settings')->insert([
            'name' => 'news_subtitle',
            'value' => 'Add this paragraph',
        ]);
        DB::table('settings')->insert([
            'name' => 'about',
            'value' => 'The Rwanda Healthcare Federation (RHF) is the premier private health sector body in Rwanda with an ultimate 
            goal of advocating for the interests of the private health sector and promoting access to affordable, 
            equitable and quality health services. The RHF brings together non-state actors in the healthcare space 
            including but not limited to health professionals’ associations, Non-Government Organizations (NGOs) and 
            Faith Based Organizations (FBOs).
            ',
        ]);
    }
}
