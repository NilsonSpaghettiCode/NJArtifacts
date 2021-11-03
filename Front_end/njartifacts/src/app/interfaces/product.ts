export interface Product {
    id: number;
    name_product: string;
    description: string;
    categoryId: number;
    //Agregar marca
    quantity:number;
    list_features: [];
    url_image: string;
    value: number;
}
