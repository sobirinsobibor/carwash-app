<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\CarCategory;
use App\Models\Car;
use App\Models\Pet;
use App\Models\User;
use App\Models\Pack;
use App\Models\CarReq;
use App\Models\Role;
use App\Models\Service;
use App\Models\ServicePack;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory(15)->create();
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        CarCategory::factory()->create([
            'category_name' => "Reguler Car",
            'category_slug' => "regulercar"
        ]);
        CarCategory::factory()->create([
            'category_name' => "Van",
            'category_slug' => "van"
        ]);
        CarCategory::factory()->create([
            'category_name' => "Pick-up",
            'category_slug' => "pick-up"
        ]);
        CarCategory::factory()->create([
            'category_name' => "Pick-up Truck",
            'category_slug' => "pick-up-truck"
        ]);

        CarReq::factory()->create([
            'carCategory_id' => 1,
            'requirement' => "1.000cc - 3.000cc"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 1,
            'requirement' => "Max Seven Seats"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 1,
            'requirement' => "Four Wheels"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 1,
            'requirement' => "Not Used for Pick"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 1,
            'requirement' => "Second or Rental Cars are Welcome"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 2,
            'requirement' => "2.000cc - 3.500cc"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 2,
            'requirement' => "More Than Seven Seats"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 2,
            'requirement' => "Four Wheels or More"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 2,
            'requirement' => "Rental or Travel Cars are Welcome"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 3,
            'requirement' => "1.500cc - 3.500cc"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 3,
            'requirement' => "Single or Double Cabin"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 3,
            'requirement' => "Four Wheels or More"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 3,
            'requirement' => "1.500cc - 3.500cc"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 3,
            'requirement' => "Carrier Transportation are Welcome"
        ]);
        CarReq::factory()->create([
            'carCategory_id' => 4,
            'requirement' => "Every Pick-up Using Box Behind the Vehicle"
        ]);

        

        Car::factory()->create([
            'carCategory_id' => 1,
            'car_name' => "Avanza"
        ]);
        Car::factory()->create([
            'carCategory_id' => 1,
            'car_name' => "Any Sedan"
        ]);
        Car::factory()->create([
            'carCategory_id' => 1,
            'car_name' => "Pajero"
        ]);
        Car::factory()->create([
            'carCategory_id' => 1,
            'car_name' => "Jazz"
        ]);
        Car::factory()->create([
            'carCategory_id' => 1,
            'car_name' => "Ertiga"
        ]);

        Car::factory()->create([
            'carCategory_id' => 2,
            'car_name' => "Grand Max"
        ]);

        Car::factory()->create([
            'carCategory_id' => 2,
            'car_name' => "Luxio"
        ]);

        Car::factory()->create([
            'carCategory_id' => 2,
            'car_name' => "Hiace"
        ]);

        Car::factory()->create([
            'carCategory_id' => 2,
            'car_name' => "Elf"
        ]);

        Car::factory()->create([
            'carCategory_id' => 2,
            'car_name' => "Serena"
        ]);

        Car::factory()->create([
            'carCategory_id' => 3,
            'car_name' => "Grand Max pick-up"
        ]);

        Car::factory()->create([
            'carCategory_id' => 3,
            'car_name' => "Hilux Single/Double Cabin"
        ]);

        Car::factory()->create([
            'carCategory_id' => 4,
            'car_name' => "All Pick-up Using Box Behind"
        ]);


        Service::factory()->create([
            'service_name' => "vehicle Hand Wash",
            'service_desc' => "Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque enatib.."
        ]);
        Service::factory()->create([
            'service_name' => "Headlight Lens Restoration",
            'service_desc' => "Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque enatib.."
        ]);
        Service::factory()->create([
            'service_name' => "Scratch Removal",
            'service_desc' => "Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque enatib.."
        ]);
        Service::factory()->create([
            'service_name' => "Tar Removal",
            'service_desc' => "Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque enatib.."
        ]);
        Service::factory()->create([
            'service_name' => "Odor Elimination",
            'service_desc' => "Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque enatib.."
        ]);
        Service::factory()->create([
            'service_name' => "Engine Cleaning",
            'service_desc' => "Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque enatib.."
        ]);
        Service::factory()->create([
            'service_name' => "Hazardous Cleaning",
            'service_desc' => "Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque enatib.."
        ]);
        Service::factory()->create([
            'service_name' => "Valet Service",
            'service_desc' => "Lorem ipsum dolor sit amet cons elit aenean commodo ligula egetetsg cum sociis natoque enatib.."
        ]);

        Pack::factory()->create([
            'carCategory_id' => 1,
            'pack_name' => "Basic Plan",
            'time' => '30',
            'price' => 40000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 1,
            'pack_name' => "Delux Washing",
            'time' => '50',
            'price' => 60000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 1,
            'pack_name' => "Ultimate Detailing",
            'time' => '60',
            'price' => 800000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 2,
            'pack_name' => "Basic Plan",
            'time' => '30',
            'price' => 40000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 2,
            'pack_name' => "Detail Cleaning",
            'time' => '60',
            'price' => 70000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 3,
            'pack_name' => "Basic Plan",
            'time' => '30',
            'price' => 40000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 3,
            'pack_name' => "Cargo Cleaning",
            'time' => '50',
            'price' => 60000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 3,
            'pack_name' => "Ultimate Detailing",
            'time' => '70',
            'price' => 100000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 4,
            'pack_name' => "Basic Plan",
            'time' => '30',
            'price' => 40000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 4,
            'pack_name' => "Box Washing",
            'time' => '30',
            'price' => 50000
        ]);
        Pack::factory()->create([
            'carCategory_id' => 4,
            'pack_name' => "Body Detailing",
            'time' => '60',
            'price' => 80000
        ]);
        

        ServicePack::factory()->create([
            'pack_id' => 1,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 1,
            'service_id' => 2
        ]);

        ServicePack::factory()->create([
            'pack_id' => 2,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 2,
            'service_id' => 2
        ]);
        ServicePack::factory()->create([
            'pack_id' => 2,
            'service_id' => 3
        ]);
        ServicePack::factory()->create([
            'pack_id' => 2,
            'service_id' => 4
        ]);

        ServicePack::factory()->create([
            'pack_id' => 3,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 3,
            'service_id' => 2
        ]);
        ServicePack::factory()->create([
            'pack_id' => 3,
            'service_id' => 3
        ]);
        ServicePack::factory()->create([
            'pack_id' => 3,
            'service_id' => 4
        ]);
        ServicePack::factory()->create([
            'pack_id' => 3,
            'service_id' => 5
        ]);
        ServicePack::factory()->create([
            'pack_id' => 3,
            'service_id' => 6
        ]);
        ServicePack::factory()->create([
            'pack_id' => 4,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 4,
            'service_id' => 2
        ]);
        ServicePack::factory()->create([
            'pack_id' => 4,
            'service_id' => 3
        ]);
        ServicePack::factory()->create([
            'pack_id' => 5,
            'service_id' => 6
        ]);
        ServicePack::factory()->create([
            'pack_id' => 5,
            'service_id' => 7
        ]);
        ServicePack::factory()->create([
            'pack_id' => 5,
            'service_id' => 8
        ]);
        ServicePack::factory()->create([
            'pack_id' => 5,
            'service_id' => 4
        ]);
        ServicePack::factory()->create([
            'pack_id' => 6,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 6,
            'service_id' => 2
        ]);
        ServicePack::factory()->create([
            'pack_id' => 6,
            'service_id' => 3
        ]);
        ServicePack::factory()->create([
            'pack_id' => 6,
            'service_id' => 4
        ]);
        ServicePack::factory()->create([
            'pack_id' => 7,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 7,
            'service_id' => 2
        ]);
        ServicePack::factory()->create([
            'pack_id' => 7,
            'service_id' => 3
        ]);
        ServicePack::factory()->create([
            'pack_id' => 7,
            'service_id' => 4
        ]);
        ServicePack::factory()->create([
            'pack_id' => 7,
            'service_id' => 5
        ]);
        ServicePack::factory()->create([
            'pack_id' => 7,
            'service_id' => 6
        ]);
        // 
        ServicePack::factory()->create([
            'pack_id' => 8,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 8,
            'service_id' => 2
        ]);
        ServicePack::factory()->create([
            'pack_id' => 8,
            'service_id' => 3
        ]);
        ServicePack::factory()->create([
            'pack_id' => 8,
            'service_id' => 4
        ]);
        ServicePack::factory()->create([
            'pack_id' => 8,
            'service_id' => 5
        ]);
        ServicePack::factory()->create([
            'pack_id' => 8,
            'service_id' => 6
        ]);
        ServicePack::factory()->create([
            'pack_id' => 8,
            'service_id' => 7
        ]);
        ServicePack::factory()->create([
            'pack_id' => 8,
            'service_id' => 8
        ]);
        // 
        ServicePack::factory()->create([
            'pack_id' => 9,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 9,
            'service_id' => 2
        ]);

        ServicePack::factory()->create([
            'pack_id' => 9,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 10,
            'service_id' => 2
        ]);
        ServicePack::factory()->create([
            'pack_id' => 10,
            'service_id' => 3
        ]);
        ServicePack::factory()->create([
            'pack_id' => 10,
            'service_id' => 4
        ]);

        ServicePack::factory()->create([
            'pack_id' => 11,
            'service_id' => 1
        ]);
        ServicePack::factory()->create([
            'pack_id' => 11,
            'service_id' => 2
        ]);
        ServicePack::factory()->create([
            'pack_id' => 11,
            'service_id' => 3
        ]);
        ServicePack::factory()->create([
            'pack_id' => 11,
            'service_id' => 4
        ]);
        ServicePack::factory()->create([
            'pack_id' => 11,
            'service_id' => 5
        ]);
        ServicePack::factory()->create([
            'pack_id' => 11,
            'service_id' => 6
        ]);

        Role::factory()->create([
            'role_name' => 'Admin'
        ]);
        Role::factory()->create([
            'role_name' => 'Kasir'
        ]);
        Role::factory()->create([
            'role_name' => 'Pelanggan'
        ]);
        
        
    }
}
