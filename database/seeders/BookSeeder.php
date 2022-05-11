<?php

namespace Database\Seeders;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $book1 = Book::create([
            'category_id' => Category::where('name', 'ريادة الأعمال')->first()->id,
            'publisher_id' => Publisher::where('name', 'أكاديمية حاسوب')->first()->id,
            'title' => 'التوظيف عن بعد',
            'description' => 'مع التطور التقني أصبح من اليسير أداء الكثير من الأعمال من أي مكان دون الحاجة إلى الانتقال إلى مكتب معين وتكبد عناء المواصلات أو القيادة، وهذا يوفر النفقات والوقت ويحسن إنتاجية العمل. تصفح على موقع فرصة',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '6474746',
            'cover_image' => 'images/covers/1.png',
        ]);
        $book1->authors()->attach(Author::where('name', 'كريم ناجي')->first());

        $book2 = Book::create([
            'category_id' => Category::where('name', 'ريادة الأعمال')->first()->id,
            'publisher_id' => Publisher::where('name', 'أكاديمية حاسوب')->first()->id,
            'title' => 'التوظيف عن بعد',
            'description' => 'مع التطور التقني أصبح من اليسير أداء الكثير من الأعمال من أي مكان دون الحاجة إلى الانتقال إلى مكتب معين وتكبد عناء المواصلات أو القيادة، وهذا يوفر النفقات والوقت ويحسن إنتاجية العمل. تصفح على موقع فرصة',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '6474746',
            'cover_image' => 'images/covers/2.png',
        ]);
        $book2->authors()->attach(Author::where('name', 'كريم ناجي')->first());

        $book3 = Book::create([
            'category_id' => Category::where('name', 'ريادة الأعمال')->first()->id,
            'publisher_id' => Publisher::where('name', 'أكاديمية حاسوب')->first()->id,
            'title' => 'التوظيف عن بعد',
            'description' => 'مع التطور التقني أصبح من اليسير أداء الكثير من الأعمال من أي مكان دون الحاجة إلى الانتقال إلى مكتب معين وتكبد عناء المواصلات أو القيادة، وهذا يوفر النفقات والوقت ويحسن إنتاجية العمل. تصفح على موقع فرصة',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '6474746',
            'cover_image' => 'images/covers/3.png',
        ]);
        $book3->authors()->attach(Author::where('name', 'كريم ناجي')->first());

        $book4 = Book::create([
            'category_id' => Category::where('name', 'ريادة الأعمال')->first()->id,
            'publisher_id' => Publisher::where('name', 'أكاديمية حاسوب')->first()->id,
            'title' => 'التوظيف عن بعد',
            'description' => 'مع التطور التقني أصبح من اليسير أداء الكثير من الأعمال من أي مكان دون الحاجة إلى الانتقال إلى مكتب معين وتكبد عناء المواصلات أو القيادة، وهذا يوفر النفقات والوقت ويحسن إنتاجية العمل. تصفح على موقع فرصة',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '6474746',
            'cover_image' => 'images/covers/4.png',
        ]);
        $book4->authors()->attach(Author::where('name', 'كريم ناجي')->first());

        $book5 = Book::create([
            'category_id' => Category::where('name', 'ريادة الأعمال')->first()->id,
            'publisher_id' => Publisher::where('name', 'أكاديمية حاسوب')->first()->id,
            'title' => 'التوظيف عن بعد',
            'description' => 'مع التطور التقني أصبح من اليسير أداء الكثير من الأعمال من أي مكان دون الحاجة إلى الانتقال إلى مكتب معين وتكبد عناء المواصلات أو القيادة، وهذا يوفر النفقات والوقت ويحسن إنتاجية العمل. تصفح على موقع فرصة',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '6474746',
            'cover_image' => 'images/covers/5.png',
        ]);
        $book5->authors()->attach(Author::where('name', 'كريم ناجي')->first());

        $book6 = Book::create([
            'category_id' => Category::where('name', 'ريادة الأعمال')->first()->id,
            'publisher_id' => Publisher::where('name', 'أكاديمية حاسوب')->first()->id,
            'title' => 'التوظيف عن بعد',
            'description' => 'مع التطور التقني أصبح من اليسير أداء الكثير من الأعمال من أي مكان دون الحاجة إلى الانتقال إلى مكتب معين وتكبد عناء المواصلات أو القيادة، وهذا يوفر النفقات والوقت ويحسن إنتاجية العمل. تصفح على موقع فرصة',
            'number_of_copies' => '300',
            'number_of_pages' => '288',
            'price' => '17',
            'isbn' => '6474746',
            'cover_image' => 'images/covers/6.png',
        ]);
        $book6->authors()->attach(Author::where('name', 'كريم ناجي')->first());
    }
}
