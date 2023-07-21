import { useState, useMemo, useCallback } from 'react'
import { getCategories } from '../services/categories'


export function useCategories(){
    const [categories, setCategories] = useState([])
    
    const getList = useCallback(async () => {
        try{
            const newCategories = await getCategories()
            setCategories(newCategories)
        }catch(e){
            throw Error('Something went wrong in useCategories : '+e)
        }
    },[])

    const sorted = useMemo(() => {
        return [...categories].sort((a, b) => b.children.length-a.children.length)
        //return [...categories].sort((a, b) => a.name.localeCompare(b.name))
        }, [categories])

    return { categories: sorted, getList }
}