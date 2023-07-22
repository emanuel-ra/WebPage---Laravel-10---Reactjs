import { useState, useMemo, useCallback } from 'react'
import { getProducts } from '../services/products'

export function useProducts(){
    const [products, setProducts] = useState([])
    
    const getList = useCallback(async () => {
        try{
            const newData = await getProducts()
            setProducts(newData)
        }catch(e){
            throw Error('Something went wrong in useCategories : '+e)
        }
    },[])

    // const sorted = useMemo(() => {        
    //     return [...products].sort((a, b) => a.name.localeCompare(b.name))
    //     }, [products])

    return { products, getList }
}