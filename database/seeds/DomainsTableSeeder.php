
<?php
use Illuminate\Database\Seeder;
use App\Domain;

class DomainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $domains = ["http://localhost:8080", "http://client2.domain.com"];

        foreach ($domains as $domain) {
            Domain::create(["domain" => $domain]);
        }
    }   
}