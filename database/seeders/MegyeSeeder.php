<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MegyeSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('counties')->insert([
            [
                'mnev' => 'Bács-Kiskun',
                'megyecimer' => 'https://bacs.katasztrofavedelem.hu/application/templates/default/county/images/coat_of_arms/megye-bacs.png',
            ],
            [
                'mnev' => 'Baranya',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRcDaqqJwqlACNr4nmokO41kq1JlYLB591rpwj9spdmaw&s=10',
            ],
            [
                'mnev' => 'Békés',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQMOYd8It3ySQKpJddDg6RFbqMbHSYnhY1jmLju5Yvt2g&s=10',
            ],
            [
                'mnev' => 'Borsod-Abaúj-Zemplén',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQPBHZJdgMSVbKn01nL1vp_lO0tUTR88Hu73Pe6QyfIfg&s=10',
            ],
            [
                'mnev' => 'Csongrád-Csanád',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRd_T1xzxJDeb1Av-1yqo7WwzRTPLfqqCwdiQ-hCNbhPw&s=10',
            ],
            [
                'mnev' => 'Fejér',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRy539a5OPLGVDOgweGWQwAPDzP8HtaxqKCq_e4ShARrw&s=10',
            ],
            [
                'mnev' => 'Győr-Moson-Sopron',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsCCxAvzAS6YInBvCPo_5ez3ygEAqxbK4VhqP3T8UvgQ&s=10',
            ],
            [
                'mnev' => 'Hajdú-Bihar',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTI0wcof2J5HHzfezdsmCudsHkPUxdMq0c8n3lFCvirkQ&s=10',
            ],
            [
                'mnev' => 'Heves',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNodrBab5yNyLHfWtsfWH9gknPhERscrdpBjujtyWPCA&s=10',
            ],
            [
                'mnev' => 'Jász-Nagykun-Szolnok',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQf16Lh-uaHgqdDhkZYeeD2-FW-pwauHqhCY3-kq-kaOw&s=10',
            ],
            [
                'mnev' => 'Komárom-Esztergom',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYRbvt-ErN1Ze94kZh6yvVkFjhsNICDWH9Sm9INWfZfw&s=10',
            ],
            [
                'mnev' => 'Nógrád',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUKFUphd1-8599ZG0aAEIFUTaPWhfwhoA4LMyipWSEYg&s=10',
            ],
            [
                'mnev' => 'Pest',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR-4hRW5BNi96JKBycqUT578MzRrJyh2wq0F2p1qd78YQ&s=10',
            ],
            [
                'mnev' => 'Somogy',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBXadyTOdur7cg5vp1IJRKhw_RRHjUXzRUuUbqlWlczA&s=10',
            ],
            [
                'mnev' => 'Szabolcs-Szatmár-Bereg',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRGHO3N641IgdydXDO71YyqoPHepjFWM4OaAbRmQZwj-w&s=10',
            ],
            [
                'mnev' => 'Tolna',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTv5KfS_kAd7k2CHU0Y_domTcTnJiLq4MNXTCTvKsO_WA&s=10',
            ],
            [
                'mnev' => 'Vas',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSobzTgPvRCDhswNz5jNwBy6FDIw7bl5hqBkn9VU5S9bQ&s=10',
            ],
            [
                'mnev' => 'Veszprém',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSxc6fWBqiDy2jaPrRO3Toh1Uns5P6oCO3KbqSkYDSpFA&s=10',
            ],
            [
                'mnev' => 'Zala',
                'megyecimer' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT7bHY9N9Nh8XfCUxYTUdxAGYVvl5lzOf0W9MytO3hUbg&s=10',
            ],
        ]);
    }
}