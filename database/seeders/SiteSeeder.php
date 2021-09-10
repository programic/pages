<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SiteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sites')->insert([[
            'name' => 'rappers sjors',
            'active' => 1,
            'slug' => 'rapper-sjors',
            'template_name' => 'dark_theme',
            'favicon' => 'favicon',
            'fb_pixel' => 'facebook',
            'google_tag_manager' => 'google',
            'seo' => '{
   "2a5851a8-cb0f-499a-85aa-14a83bee32dc":{
      "key":"description",
      "value":"test"
   }
}',
            'content' => '{
   "54fa5d38-f261-4103-b810-e18792d49619":{
      "type":"bio",
      "data":{
         "bio":"<div>Hallo<\/div>"
      }
   },
   "cb72be9d-8d22-424c-b813-0cf0932a5f04":{
      "type":"bookings",
      "data":{
         "booking":{
            "455f76c6-8734-4c26-b5e8-ec31be3c335e":{
               "name":"Ziggo dome",
               "date":"2021-09-10 15:02"
            },
            "d859f8b8-fb4c-47fd-8bfa-dc50262d0fdf":{
               "name":"Nog een",
               "date":"2021-09-10 15:02"
            }
         }
      }
   },
   "53b12087-e2b2-45fa-8a7b-09a0d57cf426":{
      "type":"social_media",
      "data":{
         "social_media":{
            "9435189e-9840-4d6a-9110-0bddefe26da7":{
               "label":"Facebook",
               "url":"https:\/\/fb.com"
            }
         }
      }
   }
}',
        ], [
            'name' => 'tiesto',
            'active' => 1,
            'slug' => 'tiesto',
            'template_name' => 'light_theme',
            'favicon' => 'favicon',
            'fb_pixel' => 'facebook',
            'google_tag_manager' => 'google',
            'seo' => '{
   "2a5851a8-cb0f-499a-85aa-14a83bee32dc":{
      "key":"description",
      "value":"test"
   }
}',
            'content' => '{
   "54fa5d38-f261-4103-b810-e18792d49619":{
      "type":"bio",
      "data":{
         "bio":"<div>Hallo<\/div>"
      }
   },
   "cb72be9d-8d22-424c-b813-0cf0932a5f04":{
      "type":"bookings",
      "data":{
         "booking":{
            "455f76c6-8734-4c26-b5e8-ec31be3c335e":{
               "name":"Ziggo dome",
               "date":"2021-09-10 15:02"
            },
            "d859f8b8-fb4c-47fd-8bfa-dc50262d0fdf":{
               "name":"Nog een",
               "date":"2021-09-10 15:02"
            }
         }
      }
   },
   "53b12087-e2b2-45fa-8a7b-09a0d57cf426":{
      "type":"social_media",
      "data":{
         "social_media":{
            "9435189e-9840-4d6a-9110-0bddefe26da7":{
               "label":"Facebook",
               "url":"https:\/\/fb.com"
            }
         }
      }
   }
}',
        ]
        ]);
    }
}