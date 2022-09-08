import ItemsList from "./components/Items/List"
import CategoriesList from "./components/Categories/List"

export default {
    mode: 'history',
    routes: [
        {
            name: ItemsList,
            component: ItemsList,
            path: "/Items/list"
        },
        {
            name: CategoriesList,
            component: CategoriesList,
            path: "/Categories/list"
        }
    ]
}
