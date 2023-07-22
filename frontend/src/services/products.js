import { API_URL } from "../constants/api"


export const getProducts = async ({ page }) => {

    if(page===undefined && page<=0) page=1

    try{
        const response = await fetch(`${API_URL}/products/get?page=${page}`)
        const json = await response.json()
        return json;
    } catch ({ name, message }) {
        console.log(message)
        throw new Error('Error')        
    }
}