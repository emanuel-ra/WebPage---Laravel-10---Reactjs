import { API_URL } from "../constants/api"


export const getCategories = async () => {
    try{
        const response = await fetch(`${API_URL}/categories/get`)
        const json = await response.json()
        return json?.map(d => ({
            id: d.id,
            name: d.name ,        
            image: d.image ,
            description: d.description ,
            target: `products/${d.id}` ,
            key: `category_${d.id}` ,
            children: d.children?.map( c => ({
                id: c.id,
                name: c.name ,        
                image: c.image ,
                description: c.description ,
                target: `products/${c.id}` ,
                key: `category_${c.id}` ,
            }))
        }))

    } catch ({ name, message }) {
        console.log(message)
        throw new Error('Error')        
    }
}