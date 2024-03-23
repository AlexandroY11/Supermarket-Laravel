<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Usuario;
use App\Models\Proveedor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Producto::factory(50)->create();
        // Categoria::factory(50)->create();

        $categoria1 = new Categoria();
        $categoria1->nombre_categoria = 'Edredones';
        $categoria1->descripcion_categoria = 'Los edredones son piezas de ropa de cama acolchadas y rellenas de material aislante. Se utilizan para cubrir la cama y proporcionar calor durante el sueño.';
                
        $categoria2 = new Categoria();
        $categoria2->nombre_categoria = 'Colchas';
        $categoria2->descripcion_categoria = 'Las colchas son piezas de tela decorativas que se colocan sobre la cama para agregar estilo y calidez a la habitación. Son una excelente manera de agregar un toque de elegancia y confort a cualquier dormitorio.';
                
        $categoria3 = new Categoria();
        $categoria3->nombre_categoria = 'Sabanas';
        $categoria3->descripcion_categoria = 'Las sábanas son piezas de tela que se colocan sobre el colchón para protegerlo y proporcionar una superficie suave y cómoda para dormir. Vienen en diferentes tamaños y materiales para adaptarse a tus necesidades.';
                
        $categoria4 = new Categoria();
        $categoria4->nombre_categoria = 'Cortinas';
        $categoria4->descripcion_categoria = 'Las cortinas son elementos decorativos y funcionales que se utilizan para cubrir las ventanas y controlar la entrada de luz y privacidad en una habitación. Vienen en una amplia variedad de estilos y colores para complementar la decoración.';
                
        $categoria5 = new Categoria();
        $categoria5->nombre_categoria = 'Toallas';
        $categoria5->descripcion_categoria = 'Las toallas son piezas de tela absorbente que se utilizan para secar el cuerpo después del baño o la ducha. También se pueden usar para limpiar derrames y como accesorios decorativos en el baño.';

        $categoria1->save();
        $categoria2->save();
        $categoria3->save();
        $categoria4->save();
        $categoria5->save();
        
        $usuario = new Usuario();

        $usuario->nombre_usuario = 'admin';
        $usuario->email_usuario = 'admin@gmail.com';
        $usuario->password_usuario = '12345';

        $usuario->save();

        Usuario::factory(50)->create();

        $proveedor = new Proveedor();

        $proveedor->nombre_proveedor = 'Colombina';
        $proveedor->email_proveedor = 'colombina@gmail.com';
        $proveedor->direccion_proveedor='Cra12';
        $proveedor->telefono_proveedor='313161827';

        $proveedor->save();
    }
}
