import { Caracteristica } from "./caracteristicas";
import { Imagen } from "./imagen";
import { Category } from "./category";
export interface Product {
    id_producto: number;
    nombre: string;
    descripcion: string;
    valor: number;
    cantidad:number;
    create_at:string;
    updated_at:string;

    caracteristicas?: Caracteristica[];
    categorias?: Category[];
    imagenes:Imagen[];

}
