import { reactive } from 'vue'

let wishlist_count = function()
{
    let wishlist = JSON.parse(localStorage.getItem('wishlist'));

    if(wishlist)
    {
        return wishlist.length;
    }

    return 0;
};

export const wishlist_store = reactive({
    count: wishlist_count()
})