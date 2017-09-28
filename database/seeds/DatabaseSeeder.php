<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
      // USUARIO
      DB::table('users')->insert([
        'id' => 1,
        'name' => 'Caio Batista',
        'email' => 'cbatista.93@gmail.com',
        'password' => '$2y$10$WDdOY0ZplD1K0RkO5rnHvOatHAglpc8PBCxxxhOOOg01RAQcoDiWi',
        'remember_token' => null,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);
      // /USUARIO
      // CATEGORIAS
      DB::table('posts_categories')->insert([
          'id' => 1,
          'name' => 'Saúde',
          'color' => '0DCDC0',
          'created_at' => '2017-09-28 00:27:40',
          'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts_categories')->insert([
          'id' => 2,
          'name' => 'Cotidiano',
          'color' => '#D13F4A',
          'created_at' => '2017-09-28 00:27:40',
          'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts_categories')->insert([
          'id' => 3,
          'name' => 'Tecnologia',
          'color' => '#3598DB',
          'created_at' => '2017-09-28 00:27:40',
          'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts_categories')->insert([
          'id' => 4,
          'name' => 'Economia',
          'color' => '#E3A711',
          'created_at' => '2017-09-28 00:27:40',
          'updated_at' => '2017-09-28 00:27:40',
      ]);
      // /CATEGORIAS 

      // POSTS
      DB::table('posts')->insert([
        'id' => 1,
        'title' => 'Negreira loks',
        'slug' => 'negreira-loks',
        'cover' => 'http://www.caminomyway.com/wp-content/uploads/2013/06/path-windmill-negreira-Camino-Finisterre-Galicia.jpg',
        'category_id' => 3,
        'tags' => 'negreira,negro,nigga,nigger',
        'publish_date' => '2017-09-27',
        'content' => 'Bacon ipsum dolor amet ground round biltong bresaola brisket tail kevin leberkas. Doner brisket jowl, hamburger boudin venison kielbasa kevin biltong short loin. Shank ham hock pork belly short ribs, spare ribs filet mignon pig leberkas rump boudin. Capicola jerky short loin andouille pork pork belly brisket shoulder swine jowl tri-tip frankfurter bacon. Pastrami prosciutto chuck shank sausage tail short ribs fatback tongue, t-bone meatloaf ball tip salami.

Pancetta cow tongue venison swine beef ribs meatball. Ground round chuck ball tip pork chop cow landjaeger kielbasa short loin tongue shankle capicola turkey alcatra prosciutto ribeye. Cow pork drumstick, short loin tri-tip pork loin doner pork chop leberkas chicken ball tip. Shankle tri-tip pork loin, brisket shoulder doner ham hock chicken turducken picanha tenderloin ball tip drumstick jerky ground round. Biltong hamburger sirloin porchetta burgdoggen picanha. Pancetta hamburger t-bone, ball tip andouille shank kielbasa.',
        'writer_id' => 1,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts')->insert([
        'id' => 2,
        'title' => 'Viola Louca',
        'slug' => 'viola-louca',
        'cover' => 'https://i.ytimg.com/vi/724ruJ9QpCQ/maxresdefault.jpg',
        'category_id' => 2,
        'tags' => 'viola,violeiro,louca',
        'publish_date' => '2017-09-27',
        'content' => 'Veggies es bonus vobis, proinde vos postulo essum magis kohlrabi welsh onion daikon amaranth tatsoi tomatillo melon azuki bean garlic.

Gumbo beet greens corn soko endive gumbo gourd. Parsley shallot courgette tatsoi pea sprouts fava bean collard greens dandelion okra wakame tomato. Dandelion cucumber earthnut pea peanut soko zucchini.',
        'writer_id' => 1,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts')->insert([
        'id' => 3,
        'title' => 'Sete blowers',
        'slug' => 'sete-blowers',
        'cover' => 'http://img.ibxk.com.br/2015/04/07/07121303620412.jpg?w=600',
        'category_id' => 1,
        'tags' => 'sete,7,seven,blow,blowe',
        'publish_date' => '2017-09-27',
        'content' => 'Look, just because I don\'t be givin\' no man a foot massage don\'t make it right for Marsellus to throw Antwone into a glass motherfuckin\' house, fuckin\' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, \'cause I\'ll kill the motherfucker, know what I\'m sayin\'?',
        'writer_id' => 1,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts')->insert([
        'id' => 4,
        'title' => 'Negreira loks 1',
        'slug' => 'negreira-loks-1',
        'cover' => 'http://www.caminomyway.com/wp-content/uploads/2013/06/path-windmill-negreira-Camino-Finisterre-Galicia.jpg',
        'category_id' => 3,
        'tags' => 'negreira,negro,nigga,nigger',
        'publish_date' => '2017-09-27',
        'content' => 'Bacon ipsum dolor amet ground round biltong bresaola brisket tail kevin leberkas. Doner brisket jowl, hamburger boudin venison kielbasa kevin biltong short loin. Shank ham hock pork belly short ribs, spare ribs filet mignon pig leberkas rump boudin. Capicola jerky short loin andouille pork pork belly brisket shoulder swine jowl tri-tip frankfurter bacon. Pastrami prosciutto chuck shank sausage tail short ribs fatback tongue, t-bone meatloaf ball tip salami.

Pancetta cow tongue venison swine beef ribs meatball. Ground round chuck ball tip pork chop cow landjaeger kielbasa short loin tongue shankle capicola turkey alcatra prosciutto ribeye. Cow pork drumstick, short loin tri-tip pork loin doner pork chop leberkas chicken ball tip. Shankle tri-tip pork loin, brisket shoulder doner ham hock chicken turducken picanha tenderloin ball tip drumstick jerky ground round. Biltong hamburger sirloin porchetta burgdoggen picanha. Pancetta hamburger t-bone, ball tip andouille shank kielbasa.',
        'writer_id' => 1,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts')->insert([
        'id' => 5,
        'title' => 'Sete blowers 1',
        'slug' => 'sete-blowers-1',
        'cover' => 'http://img.ibxk.com.br/2015/04/07/07121303620412.jpg?w=600',
        'category_id' => 2,
        'tags' => 'sete,7,seven,blow,blowe',
        'publish_date' => '2017-09-27',
        'content' => 'Look, just because I don\'t be givin\' no man a foot massage don\'t make it right for Marsellus to throw Antwone into a glass motherfuckin\' house, fuckin\' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, \'cause I\'ll kill the motherfucker, know what I\'m sayin\'?',
        'writer_id' => 1,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts')->insert([
        'id' => 6,
        'title' => 'Negreira loks 2',
        'slug' => 'negreira-loks-2',
        'cover' => 'http://www.caminomyway.com/wp-content/uploads/2013/06/path-windmill-negreira-Camino-Finisterre-Galicia.jpg',
        'category_id' => 3,
        'tags' => 'negreira,negro,nigga,nigger',
        'publish_date' => '2017-09-27',
        'content' => 'Bacon ipsum dolor amet ground round biltong bresaola brisket tail kevin leberkas. Doner brisket jowl, hamburger boudin venison kielbasa kevin biltong short loin. Shank ham hock pork belly short ribs, spare ribs filet mignon pig leberkas rump boudin. Capicola jerky short loin andouille pork pork belly brisket shoulder swine jowl tri-tip frankfurter bacon. Pastrami prosciutto chuck shank sausage tail short ribs fatback tongue, t-bone meatloaf ball tip salami.

Pancetta cow tongue venison swine beef ribs meatball. Ground round chuck ball tip pork chop cow landjaeger kielbasa short loin tongue shankle capicola turkey alcatra prosciutto ribeye. Cow pork drumstick, short loin tri-tip pork loin doner pork chop leberkas chicken ball tip. Shankle tri-tip pork loin, brisket shoulder doner ham hock chicken turducken picanha tenderloin ball tip drumstick jerky ground round. Biltong hamburger sirloin porchetta burgdoggen picanha. Pancetta hamburger t-bone, ball tip andouille shank kielbasa.',
        'writer_id' => 1,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts')->insert([
        'id' => 7,
        'title' => 'Sete blowers 2',
        'slug' => 'sete-blowers-2',
        'cover' => 'http://img.ibxk.com.br/2015/04/07/07121303620412.jpg?w=600',
        'category_id' => 2,
        'tags' => 'sete,7,seven,blow,blowe',
        'publish_date' => '2017-09-27',
        'content' => 'Look, just because I don\'t be givin\' no man a foot massage don\'t make it right for Marsellus to throw Antwone into a glass motherfuckin\' house, fuckin\' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, \'cause I\'ll kill the motherfucker, know what I\'m sayin\'?',
        'writer_id' => 1,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);

      DB::table('posts')->insert([
        'id' => 8,
        'title' => 'Sete blowers 3',
        'slug' => 'sete-blowers-3',
        'cover' => 'http://img.ibxk.com.br/2015/04/07/07121303620412.jpg?w=600',
        'category_id' => 2,
        'tags' => 'sete,7,seven,blow,blowe',
        'publish_date' => '2017-09-27',
        'content' => 'Look, just because I don\'t be givin\' no man a foot massage don\'t make it right for Marsellus to throw Antwone into a glass motherfuckin\' house, fuckin\' up the way the nigger talks. Motherfucker do that shit to me, he better paralyze my ass, \'cause I\'ll kill the motherfucker, know what I\'m sayin\'?',
        'writer_id' => 1,
        'created_at' => '2017-09-28 00:27:40',
        'updated_at' => '2017-09-28 00:27:40',
      ]);
      // /POSTS
    }
}
