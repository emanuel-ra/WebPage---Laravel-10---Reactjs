import { API_URL } from "../constants/api"


export const getCategories = async () => {
    try{
        const response = await fetch(`${API_URL}/categories/get`)
        const json = await response.json()

        return json?.map(d => ({
            id: d.id,
            name: d.name ,        
            target: `category/${d.id}` ,
            key: `category_${d.id}` 
        }))

    } catch (e) {
        throw new Error('Error searching movies')
    }
}