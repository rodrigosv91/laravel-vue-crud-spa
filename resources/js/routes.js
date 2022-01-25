import ProductIndex from './components/products/index.vue';
import ProductCreate from './components/products/create.vue';
import ProductEdit from './components/products/edit.vue';

export const routes = [
    {
        path: '/products',
        component: ProductIndex,
        name: "ProductIndex",
        // children: [
        //     {
        //       path: "product_edit_juntos",
        //       component: ProductEdit,
        //       name: "novaRotaProductEdit"
        //     },
        // ]        // carrega component "productEdit" dentro de <router-view> dentro de component "productIndex"
    },
    {
        path: '/products/create',
        component: ProductCreate,
        name: "ProductCreate"
    },
    {
        path: '/products/edit/:productId',
        component: ProductEdit,
        name: "ProductEdit"
    }
];