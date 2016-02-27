<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTimezone extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('timezones', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('identifier');
            $table->string('name');
            $table->timestamps();
        });
        DB::table('timezones')->insert(
            [
                ['name' => '(UTC-11:00) Midway Island', 'identifier' => 'Pacific/Midway'],
                ['name' => '(UTC-11:00) Samoa', 'identifier' => 'Pacific/Samoa'],
                ['name' => '(UTC-10:00) Hawaii', 'identifier' => 'Pacific/Honolulu'],
                ['name' => '(UTC-09:00) Alaska', 'identifier' => 'US/Alaska'],
                ['name' => '(UTC-08:00) Pacific Time (US &amp; Canada)', 'identifier' =>'America/Los_Angeles'],
                ['name' => '(UTC-08:00) Tijuana', 'identifier' => 'America/Tijuana'],
                ['name' => '(UTC-07:00) Arizona', 'identifier' => 'US/Arizona'],
                ['name' => '(UTC-07:00) Chihuahua', 'identifier'=> 'America/Chihuahua'],
                ['name' => '(UTC-07:00) La Paz', 'identifier' =>'America/Chihuahua'],
                ['name' => '(UTC-07:00) Mazatlan', 'identifier' =>'America/Mazatlan'],
                ['name' => '(UTC-07:00) Mountain Time (US &amp; Canada)', 'identifier'  =>'US/Mountain'],
                ['name' => '(UTC-06:00) Central America', 'identifier' =>'America/Managua'],
                ['name' => '(UTC-06:00) Central Time (US &amp; Canada)', 'identifier'=>'US/Central'],
                ['name' => '(UTC-06:00) Guadalajara', 'identifier' =>'America/Mexico_City'],
                ['name' => '(UTC-06:00) Mexico City', 'identifier' =>'America/Mexico_City'],
                ['name' => '(UTC-06:00) Monterrey', 'identifier' =>'America/Monterrey'],
                ['name' => '(UTC-06:00) Saskatchewan', 'identifier' =>'Canada/Saskatchewan'],
                ['name' => '(UTC-05:00) Bogota', 'identifier' =>'America/Bogota'],
                ['name' => '(UTC-05:00) Eastern Time (US &amp; Canada)', 'identifier' =>'US/Eastern'],
                ['name' => '(UTC-05:00) Indiana (East)', 'identifier' =>'US/East-Indiana'],
                ['name' => '(UTC-05:00) Lima', 'identifier' =>'America/Lima'],
                ['name' => '(UTC-05:00) Quito', 'identifier' =>'America/Bogota'],
                ['name' => '(UTC-04:00) Atlantic Time (Canada)', 'identifier' =>'Canada/Atlantic'],
                ['name' => '(UTC-04:30) Caracas', 'identifier' =>'America/Caracas'],
                ['name' => '(UTC-04:00) La Paz', 'identifier' =>'America/La_Paz'],
                ['name' => '(UTC-04:00) Santiago', 'identifier' =>'America/Santiago'],
                ['name' => '(UTC-03:30) Newfoundland', 'identifier' =>'Canada/Newfoundland'],
                ['name' => '(UTC-03:00) Brasilia', 'identifier' =>'America/Sao_Paulo'],
                ['name' => '(UTC-03:00) Buenos Aires', 'identifier' =>'America/Argentina/Buenos_Aires'],
                ['name' => '(UTC-03:00) Georgetown', 'identifier' =>'America/Argentina/Buenos_Aires'],
                ['name' => '(UTC-03:00) Greenland', 'identifier' =>'America/Godthab'],
                ['name' => '(UTC-02:00) Mid-Atlantic', 'identifier' =>'America/Noronha'],
                ['name' => '(UTC-01:00) Azores', 'identifier' =>'Atlantic/Azores'],
                ['name' => '(UTC-01:00) Cape Verde Is.', 'identifier' =>'Atlantic/Cape_Verde'],
                ['name' => '(UTC+00:00) Casablanca', 'identifier' =>'Africa/Casablanca'],
                ['name' => '(UTC+00:00) Edinburgh', 'identifier' =>'Europe/London'],
                ['name' => '(UTC+00:00) Greenwich Mean Time : Dublin', 'identifier' =>'Etc/Greenwich'],
                ['name' => '(UTC+00:00) Lisbon', 'identifier' =>'Europe/Lisbon'],
                ['name' => '(UTC+00:00) London', 'identifier' =>'Europe/London'],
                ['name' => '(UTC+00:00) Monrovia', 'identifier' =>'Africa/Monrovia'],
                ['name' => '(UTC+00:00) UTC', 'identifier' =>'UTC'],
                ['name' => '(UTC+01:00) Amsterdam', 'identifier' =>'Europe/Amsterdam'],
                ['name' => '(UTC+01:00) Belgrade', 'identifier' =>'Europe/Belgrade'],
                ['name' => '(UTC+01:00) Berlin', 'identifier' =>'Europe/Berlin'],
                ['name' => '(UTC+01:00) Bern', 'identifier' =>'Europe/Berlin'],
                ['name' => '(UTC+01:00) Bratislava', 'identifier' =>'Europe/Bratislava'],
                ['name' => '(UTC+01:00) Brussels', 'identifier' =>'Europe/Brussels'],
                ['name' => '(UTC+01:00) Budapest', 'identifier' =>'Europe/Budapest'],
                ['name' => '(UTC+01:00) Copenhagen', 'identifier' =>'Europe/Copenhagen'],
                ['name' => '(UTC+01:00) Ljubljana', 'identifier' =>'Europe/Ljubljana'],
                ['name' => '(UTC+01:00) Madrid', 'identifier' =>'Europe/Madrid'],
                ['name' => '(UTC+01:00) Paris', 'identifier' =>'Europe/Paris'],
                ['name' => '(UTC+01:00) Prague', 'identifier' =>'Europe/Prague'],
                ['name' => '(UTC+01:00) Rome', 'identifier' =>'Europe/Rome'],
                ['name' => '(UTC+01:00) Sarajevo', 'identifier' =>'Europe/Sarajevo'],
                ['name' => '(UTC+01:00) Skopje', 'identifier' =>'Europe/Skopje'],
                ['name' => '(UTC+01:00) Stockholm', 'identifier' =>'Europe/Stockholm'],
                ['name' => '(UTC+01:00) Vienna', 'identifier' =>'Europe/Vienna'],
                ['name' => '(UTC+01:00) Warsaw', 'identifier' =>'Europe/Warsaw'],
                ['name' => '(UTC+01:00) West Central Africa', 'identifier' =>'Africa/Lagos'],
                ['name' => '(UTC+01:00) Zagreb', 'identifier' =>'Europe/Zagreb'],
                ['name' => '(UTC+02:00) Athens', 'identifier' =>'Europe/Athens'],
                ['name' => '(UTC+02:00) Bucharest', 'identifier' =>'Europe/Bucharest'],
                ['name' => '(UTC+02:00) Cairo', 'identifier' =>'Africa/Cairo'],
                ['name' => '(UTC+02:00) Harare', 'identifier' =>'Africa/Harare'],
                ['name' => '(UTC+02:00) Helsinki', 'identifier' =>'Europe/Helsinki'],
                ['name' => '(UTC+02:00) Istanbul', 'identifier' =>'Europe/Istanbul'],
                ['name' => '(UTC+02:00) Jerusalem', 'identifier' =>'Asia/Jerusalem'],
                ['name' => '(UTC+02:00) Kyiv', 'identifier' =>'Europe/Helsinki'],
                ['name' => '(UTC+02:00) Pretoria', 'identifier' =>'Africa/Johannesburg'],
                ['name' => '(UTC+02:00) Riga', 'identifier' =>'Europe/Riga'],
                ['name' => '(UTC+02:00) Sofia', 'identifier' =>'Europe/Sofia'],
                ['name' => '(UTC+02:00) Tallinn', 'identifier' =>'Europe/Tallinn'],
                ['name' => '(UTC+02:00) Vilnius', 'identifier' =>'Europe/Vilnius'],
                ['name' => '(UTC+03:00) Baghdad', 'identifier' =>'Asia/Baghdad'],
                ['name' => '(UTC+03:00) Kuwait', 'identifier' =>'Asia/Kuwait'],
                ['name' => '(UTC+03:00) Minsk', 'identifier' =>'Europe/Minsk'],
                ['name' => '(UTC+03:00) Nairobi', 'identifier' =>'Africa/Nairobi'],
                ['name' => '(UTC+03:00) Riyadh', 'identifier' =>'Asia/Riyadh'],
                ['name' => '(UTC+03:00) Volgograd', 'identifier' =>'Europe/Volgograd'],
                ['name' => '(UTC+03:30) Tehran', 'identifier' =>'Asia/Tehran'],
                ['name' => '(UTC+04:00) Abu Dhabi', 'identifier' =>'Asia/Muscat'],
                ['name' => '(UTC+04:00) Baku', 'identifier' =>'Asia/Baku'],
                ['name' => '(UTC+04:00) Moscow', 'identifier' =>'Europe/Moscow'],
                ['name' => '(UTC+04:00) Muscat', 'identifier' =>'Asia/Muscat'],
                ['name' => '(UTC+04:00) St. Petersburg', 'identifier' =>'Europe/Moscow'],
                ['name' => '(UTC+04:00) Tbilisi', 'identifier' =>'Asia/Tbilisi'],
                ['name' => '(UTC+04:00) Yerevan', 'identifier' =>'Asia/Yerevan'],
                ['name' => '(UTC+04:30) Kabul', 'identifier' =>'Asia/Kabul'],
                ['name' => '(UTC+05:00) Islamabad', 'identifier' =>'Asia/Karachi'],
                ['name' => '(UTC+05:00) Karachi', 'identifier' =>'Asia/Karachi'],
                ['name' => '(UTC+05:00) Tashkent', 'identifier' =>'Asia/Tashkent'],
                ['name' => '(UTC+05:30) Chennai', 'identifier' =>'Asia/Calcutta'],
                ['name' => '(UTC+05:30) Kolkata', 'identifier' =>'Asia/Kolkata'],
                ['name' => '(UTC+05:30) Mumbai', 'identifier' =>'Asia/Calcutta'],
                ['name' => '(UTC+05:30) New Delhi', 'identifier' =>'Asia/Calcutta'],
                ['name' => '(UTC+05:30) Sri Jayawardenepura', 'identifier' =>'Asia/Calcutta'],
                ['name' => '(UTC+05:45) Kathmandu', 'identifier' =>'Asia/Katmandu'],
                ['name' => '(UTC+06:00) Almaty', 'identifier' =>'Asia/Almaty'],
                ['name' => '(UTC+06:00) Astana', 'identifier' =>'Asia/Dhaka'],
                ['name' => '(UTC+06:00) Dhaka', 'identifier' =>'Asia/Dhaka'],
                ['name' => '(UTC+06:00) Ekaterinburg', 'identifier' =>'Asia/Yekaterinburg'],
                ['name' => '(UTC+06:30) Rangoon', 'identifier' =>'Asia/Rangoon'],
                ['name' => '(UTC+07:00) Bangkok', 'identifier' =>'Asia/Bangkok'],
                ['name' => '(UTC+07:00) Hanoi', 'identifier' =>'Asia/Bangkok'],
                ['name' => '(UTC+07:00) Jakarta', 'identifier' =>'Asia/Jakarta'],
                ['name' => '(UTC+07:00) Novosibirsk', 'identifier' =>'Asia/Novosibirsk'],
                ['name' => '(UTC+08:00) Beijing', 'identifier' =>'Asia/Hong_Kong'],
                ['name' => '(UTC+08:00) Chongqing', 'identifier' =>'Asia/Chongqing'],
                ['name' => '(UTC+08:00) Hong Kong', 'identifier' =>'Asia/Hong_Kong'],
                ['name' => '(UTC+08:00) Krasnoyarsk', 'identifier' =>'Asia/Krasnoyarsk'],
                ['name' => '(UTC+08:00) Kuala Lumpur', 'identifier' =>'Asia/Kuala_Lumpur'],
                ['name' => '(UTC+08:00) Perth', 'identifier' =>'Australia/Perth'],
                ['name' => '(UTC+08:00) Singapore', 'identifier' =>'Asia/Singapore'],
                ['name' => '(UTC+08:00) Taipei', 'identifier' =>'Asia/Taipei'],
                ['name' => '(UTC+08:00) Ulaan Bataar', 'identifier' =>'Asia/Ulan_Bator'],
                ['name' => '(UTC+08:00) Urumqi', 'identifier' =>'Asia/Urumqi'],
                ['name' => '(UTC+09:00) Irkutsk', 'identifier' =>'Asia/Irkutsk'],
                ['name' => '(UTC+09:00) Osaka', 'identifier' =>'Asia/Tokyo'],
                ['name' => '(UTC+09:00) Sapporo', 'identifier' =>'Asia/Tokyo'],
                ['name' => '(UTC+09:00) Seoul', 'identifier' =>'Asia/Seoul'],
                ['name' => '(UTC+09:00) Tokyo', 'identifier' =>'Asia/Tokyo'],
                ['name' => '(UTC+09:30) Adelaide', 'identifier' =>'Australia/Adelaide'],
                ['name' => '(UTC+09:30) Darwin', 'identifier' =>'Australia/Darwin'],
                ['name' => '(UTC+10:00) Brisbane', 'identifier' =>'Australia/Brisbane'],
                ['name' => '(UTC+10:00) Canberra', 'identifier' =>'Australia/Canberra'],
                ['name' => '(UTC+10:00) Guam', 'identifier' =>'Pacific/Guam'],
                ['name' => '(UTC+10:00) Hobart', 'identifier' =>'Australia/Hobart'],
                ['name' => '(UTC+10:00) Melbourne', 'identifier' =>'Australia/Melbourne'],
                ['name' => '(UTC+10:00) Port Moresby', 'identifier' =>'Pacific/Port_Moresby'],
                ['name' => '(UTC+10:00) Sydney', 'identifier' =>'Australia/Sydney'],
                ['name' => '(UTC+10:00) Yakutsk', 'identifier' =>'Asia/Yakutsk'],
                ['name' => '(UTC+11:00) Vladivostok', 'identifier' =>'Asia/Vladivostok'],
                ['name' => '(UTC+12:00) Auckland', 'identifier' =>'Pacific/Auckland'],
                ['name' => '(UTC+12:00) Fiji', 'identifier' =>'Pacific/Fiji'],
                ['name' => '(UTC+12:00) International Date Line West', 'identifier' =>'Pacific/Kwajalein'],
                ['name' => '(UTC+12:00) Kamchatka', 'identifier' =>'Asia/Kamchatka'],
                ['name' => '(UTC+12:00) Magadan', 'identifier' =>'Asia/Magadan'],
                ['name' => '(UTC+12:00) Marshall Is.', 'identifier' =>'Pacific/Fiji'],
                ['name' => '(UTC+12:00) New Caledonia', 'identifier' =>'Asia/Magadan'],
                ['name' => '(UTC+12:00) Solomon Is.', 'identifier' =>'Asia/Magadan'],
                ['name' => '(UTC+12:00) Wellington', 'identifier' =>'Pacific/Auckland'],
                ['name' => '(UTC+13:00) Nuku\'alofa', 'identifier' =>'Pacific/Tongatapu']
            ]);
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
	}

}
