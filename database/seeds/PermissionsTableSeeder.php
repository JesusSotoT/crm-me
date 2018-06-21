<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	//Users

         Permission::create([

        	'name'  	   => 'Navegar usuarios',
        	'slug'  	   => 'users.index',
        	'description'  => 'Lista y navega todos los usuarios del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalles de usuario',
        	'slug'  	   => 'users.show',
        	'description'  => 'Ver en detalle cada usuario del sistema',

        ]);

         Permission::create([

        	'name'  	   => 'Crear usuarios',
        	'slug'  	   => 'users.create',
        	'description'  => 'Creacion de usuarios del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de usuarios',
        	'slug'  	   => 'users.edit',
        	'description'  => 'Editar cualquier dato de los usuarios del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Eliminar usuarios',
        	'slug'  	   => 'users.destroy',
        	'description'  => 'Eliminar usuarios del sistema',

        ]);


       //CLIENTES
 		
 		Permission::create([

        	'name'  	   => 'Navegar clientes',
        	'slug'  	   => 'cliente.index',
        	'description'  => 'Lista y navega todos los clientes del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Ver detalle de cliente',
        	'slug'  	   => 'cliente.show',
        	'description'  => 'Ver en detalle cada cliente del sistema',

        ]);


          Permission::create([

        	'name'  	   => 'Crear Clientes',
        	'slug'  	   => 'cliente.create',
        	'description'  => 'Creacion de clientes del sistema',

        ]);


        Permission::create([

        	//Users
        	'name'  	   => 'Edicion de cliente',
        	'slug'  	   => 'cliente.edit',
        	'description'  => 'Editar cualquier dato de los clientes  del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar cliente',
        	'slug'  	   => 'cliente.destroy',
        	'description'  => 'Eliminar cliente del sistema',

        ]);


        //Roles 

         Permission::create([

        	'name'  	   => 'Navegar roles',
        	'slug'  	   => 'roles.index',
        	'description'  => 'Lista y navega todos los roles sistema',

        ]);

         Permission::create([

        	
        	'name'  	   => 'Crear detalle roles',
        	'slug'  	   => 'roles.create',
        	'description'  => 'Crear Roles del sistema',

        ]);

        Permission::create([

        
        	'name'  	   => 'Ver detalle roles',
        	'slug'  	   => 'roles.show',
        	'description'  => 'Ver en detalle cada rol del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Edicion de roles',
        	'slug'  	   => 'roles.edit',
        	'description'  => 'Editar cualquier dato de los roles del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar roles',
        	'slug'  	   => 'roles.destroy',
        	'description'  => 'Eliminar roles del sistema',

        ]);



        //Productos

         Permission::create([

        	'name'  	   => 'Navegar Productos',
        	'slug'  	   => 'products.index',
        	'description'  => 'Lista y navega todos los productos del sistema',

        ]);

         Permission::create([

        	//Users
        	'name'  	   => 'Crear detalle de Productos',
        	'slug'  	   => 'products.create',
        	'description'  => 'Crear Productos en sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalle Productos',
        	'slug'  	   => 'products.show',
        	'description'  => 'Ver en detalle cada producto del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de Productos',
        	'slug'  	   => 'products.edit',
        	'description'  => 'Editar cualquier dato del producto del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar Productos',
        	'slug'  	   => 'products.destroy',
        	'description'  => 'Eliminar productos del sistema',

        ]);





 //Inventario

         Permission::create([

        	'name'  	   => 'Navegar Inventarios',
        	'slug'  	   => 'inventario.index',
        	'description'  => 'Lista y navega todos los inventarios del sistema',

        ]);

         Permission::create([

        
        	'name'  	   => 'Crear Inventario',
        	'slug'  	   => 'inventario.create',
        	'description'  => 'Crear inventarios en sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalle de Inventario',
        	'slug'  	   => 'inventario.show',
        	'description'  => 'Ver en detalle cada inventario del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de inventario',
        	'slug'  	   => 'inventario.edit',
        	'description'  => 'Editar cualquier dato del inventario del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar inventario',
        	'slug'  	   => 'inventario.destroy',
        	'description'  => 'Eliminar inventarios del sistema',

        ]);




  //localidades

         Permission::create([

        	'name'  	   => 'Navegar localidades',
        	'slug'  	   => 'localidades.index',
        	'description'  => 'Lista y navega todos los productos del sistema',

        ]);

         Permission::create([

        	//Users
        	'name'  	   => 'Crear detalle de localidades',
        	'slug'  	   => 'localidades.create',
        	'description'  => 'Crear localidades en sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalle localidades',
        	'slug'  	   => 'localidades.show',
        	'description'  => 'Ver en detalle cada localidades del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de localidades',
        	'slug'  	   => 'localidades.edit',
        	'description'  => 'Editar cualquier dato del producto del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Eliminar localidades',
        	'slug'  	   => 'localidades.destroy',
        	'description'  => 'Eliminar localidades del sistema',

        ]);





        //Cotizaciones

         Permission::create([

        	'name'  	   => 'Navegar cotizaciones',
        	'slug'  	   => 'cotiza.index',
        	'description'  => 'Lista y navega todos los productos del sistema',

        ]);

         Permission::create([

        	//Users
        	'name'  	   => 'Crear Cotizacion',
        	'slug'  	   => 'cotiza.create',
        	'description'  => 'Crear cotizacion en sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalle de Cotizacion',
        	'slug'  	   => 'cotiza.show',
        	'description'  => 'Ver en detalle cada Cotizacion del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de Cotizacion',
        	'slug'  	   => 'cotiza.edit',
        	'description'  => 'Editar cualquier dato de la cotizacion del sistema',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar Cotizacion',
        	'slug'  	   => 'cotiza.destroy',
        	'description'  => 'Eliminar Cotizacion del sistema',

        ]);



        //Orden de Trabajo

         Permission::create([

        	'name'  	   => 'Navegar Ordenes de Trabajo',
        	'slug'  	   => 'orden.index',
        	'description'  => 'Lista y navega todos las ordenes de trabajo del sistema',

        ]);

         Permission::create([

        	//Users
        	'name'  	   => 'Crear Orden de Trabajo',
        	'slug'  	   => 'orden.create',
        	'description'  => 'Crear Orden de trabajo',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalles de Orden de trabajo',
        	'slug'  	   => 'orden.show',
        	'description'  => 'Ver en detalle cada Orden de trabajo',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de Orden de Trabajo',
        	'slug'  	   => 'orden.edit',
        	'description'  => 'Editar cualquier dato de la Orden de trabajo',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar Orden de trabajo',
        	'slug'  	   => 'orden.destroy',
        	'description'  => 'Eliminar Orden de trabajo',

        ]);


        //Descuentos
         Permission::create([

        	//Users
        	'name'  	   => 'Crear Descuento',
        	'slug'  	   => 'descuento.create',
        	'description'  => 'Crear Descuentos para aprobacion',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalles de descuento ',
        	'slug'  	   => 'descuento.show',
        	'description'  => 'Ver en detalle cada Descuento',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de descuento',
        	'slug'  	   => 'descuento.edit',
        	'description'  => 'Editar cualquier dato de descuento',

        ]);

        Permission::create([

        	//Users
        	'name'  	   => 'Eliminar descuento',
        	'slug'  	   => 'descuento.destroy',
        	'description'  => 'Eliminar descuento ',

        ]);



          //Aprobaciones

         Permission::create([

        	'name'  	   => 'Navegar Aprobaciones',
        	'slug'  	   => 'aprobacion.index',
        	'description'  => 'Lista y navega todos las ordenes de trabajo del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalles de Aprobacion',
        	'slug'  	   => 'aprobacion.show',
        	'description'  => 'Ver en detalle cada Aprobacion',

        ]);

        Permission::create([

        	'name'  	   => 'Edicion de Aprobacion y Orden de Trabajo',
        	'slug'  	   => 'aprobacion.edit',
        	'description'  => 'Editar cualquier dato de la Orden de trabajo y su aprobacion',

        ]);





        //historiales
         Permission::create([

        	'name'  	   => 'Navegar historial',
        	'slug'  	   => 'historial.index',
        	'description'  => 'Lista y navega todos las ordenes de trabajo del sistema',

        ]);

        Permission::create([

        	'name'  	   => 'Ver detalles de historial',
        	'slug'  	   => 'historial.show',
        	'description'  => 'Ver en detalle cada Aprobacion',

        ]);



    }
}
