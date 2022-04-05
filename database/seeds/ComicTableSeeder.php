<?php
use App\comic;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)  
    {
        for ($i = 0; $i<10; $i++){
            $comic = new Comic();
            $comic->name=$faker->name();
            $comic->number=$faker->bothify('?????-#####');


            $comic->save();
        }
    }
}
