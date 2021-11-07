import {Product} from './product';
export interface ProductFilter {
    id?:number;
    productId?:number;
    products?:Product[];
}
