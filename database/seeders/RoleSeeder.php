<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role1= Role::create(['name'=> 'admin']);//Definimos roles
        $role2= Role::create(['name'=> 'nurse']);
        //Creamos roles
        $permission1=Permission::create(['name' => 'persona.index']);
        $permission2=Permission::create(['name' => 'persona.edit']);
        $permission3=Permission::create(['name' => 'persona.create']);
        $permission4=Permission::create(['name' => 'persona.update']);
        $permission5=Permission::create(['name' => 'persona.destroy']);
        $permission6=Permission::create(['name' => 'paciente.index']);
        $permission7=Permission::create(['name' => 'paciente.edit']);
        $permission8=Permission::create(['name' => 'paciente.create']);
        $permission9=Permission::create(['name' => 'paciente.update']);
        $permission10=Permission::create(['name' => 'paciente.destroy']);
        $permission11=Permission::create(['name' => 'enfermera.index']);
        $permission12=Permission::create(['name' => 'enfermera.edit']);
        $permission13=Permission::create(['name' => 'enfermera.create']);
        $permission14=Permission::create(['name' => 'enfermera.update']);
        $permission15=Permission::create(['name' => 'enfermera.destroy']);
        $permission16=Permission::create(['name' => 'reserva.index']);
        $permission17=Permission::create(['name' => 'reserva.edit']);
        $permission18=Permission::create(['name' => 'reserva.create']);
        $permission19=Permission::create(['name' => 'reserva.update']);
        $permission20=Permission::create(['name' => 'reserva.destroy']);
        $permission21=Permission::create(['name' => 'servicio.index']);
        $permission22=Permission::create(['name' => 'servicio.edit']);
        $permission23=Permission::create(['name' => 'servicio.create']);
        $permission24=Permission::create(['name' => 'servicio.update']);
        $permission25=Permission::create(['name' => 'servicio.destroy']);
        $permission25=Permission::create(['name' => 'visita.index']);
        $permission26=Permission::create(['name' => 'visita.index']);
        $permission27=Permission::create(['name' => 'visita.edit']);
        $permission28=Permission::create(['name' => 'visita.create']);
        $permission29=Permission::create(['name' => 'visita.update']);
        $permission30=Permission::create(['name' => 'visita.destroy']);
        $permission31=Permission::create(['name' => 'receta.index']);
        $permission32=Permission::create(['name' => 'receta.edit']);
        $permission33=Permission::create(['name' => 'receta.create']);
        $permission34=Permission::create(['name' => 'receta.update']);
        $permission35=Permission::create(['name' => 'receta.destroy']);
        $permission36=Permission::create(['name' => 'medicamento.index']);
        $permission37=Permission::create(['name' => 'medicamento.edit']);
        $permission38=Permission::create(['name' => 'medicamento.create']);
        $permission39=Permission::create(['name' => 'medicamento.update']);
        $permission40=Permission::create(['name' => 'medicamento.destroy']);
        $permission41=Permission::create(['name' => 'kitmedico.index']);
        $permission42=Permission::create(['name' => 'kitmedico.edit']);
        $permission43=Permission::create(['name' => 'kitmedico.create']);
        $permission44=Permission::create(['name' => 'kitmedico.update']);
        $permission45=Permission::create(['name' => 'kitmedico.destroy']);


        //Asignamos los permisos a los roles que pertenecen
        $role1->syncPermissions($permission1,$permission2, $permission3 ,$permission4, $permission5,$permission6,$permission7, $permission8 ,$permission9, $permission10,
        $permission11,$permission12, $permission13 ,$permission14, $permission15,$permission16,$permission17, $permission18 ,$permission19, $permission20,$permission21,$permission22, $permission23 ,$permission24, $permission25,
        $permission26,$permission27, $permission28 ,$permission29, $permission30,$permission31,$permission32, $permission33 ,$permission34, $permission35,
        $permission36,$permission37,$permission38, $permission39 ,$permission40,$permission41,$permission42,$permission43, $permission44 ,$permission45);

        $role2->syncPermissions ($permission1, $permission6,$permission7, $permission8 ,$permission9, $permission10,$permission26,$permission27, $permission28 ,$permission29, $permission30,$permission31,$permission32, $permission33 ,$permission34, $permission35,
        $permission36,$permission37,$permission38, $permission39 ,$permission40,$permission41,$permission42,$permission43, $permission44 ,$permission45);
    }
}
