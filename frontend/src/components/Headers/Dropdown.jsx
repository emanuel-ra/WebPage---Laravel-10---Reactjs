import { NavLink } from "react-router-dom";
import { useId, useState } from "react"
import PropTypes from 'prop-types';

function Dropdown(props) {
    const dropdownId = useId()
    const btnDropdownId = useId()
    const [show,setShow] = useState(false)
    const { text, options } = props
    
  return (
    <>
        <button id={btnDropdownId} onClick={()=>setShow(!show)} data-dropdown-toggle="mega-menu-dropdown" className="flex items-center justify-between w-full py-2 pl-3 pr-4 font-medium text-gray-900 border-b border-gray-100 md:w-auto hover:bg-gray-50 md:hover:bg-transparent md:border-0 md:hover:text-blue-600 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-blue-500 md:dark:hover:bg-transparent dark:border-gray-700">
            { text } 
            <svg className="w-2.5 h-2.5 ml-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="m1 1 4 4 4-4"/>
            </svg>
        </button>
        
        <div id={dropdownId} className={`absolute z-10 ${!show && 'hidden'} w-auto text-sm bg-white border border-gray-100 rounded-lg shadow-md dark:border-gray-700 md:grid-cols-3 dark:bg-gray-700`}>
            <div className="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                <ul className="space-y-4" aria-labelledby="menu-dropdown-button">
                    {options.map( (el,index) => (                
                        <>
                        <li key={`dropdown_about_us_${index}`}>
                            <NavLink className="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500" to={el.to} onClick={()=>setShow(!show)}>{el.text}</NavLink >
                        </li>
                        </>                                       
                    ) )}
                </ul>
            </div>
            {/* 
            <div className="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                <ul className="space-y-4" aria-labelledby="mega-menu-dropdown-button">
                    <li>
                        <NavLink className="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500" to="/about">Proceso de Compra</NavLink >
                    </li>
                    <li>
                        <NavLink className="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500" to="/about">Check Plus</NavLink >
                    </li>

                    <li>
                        <NavLink className="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500" to="/about">Reporta tu Pago</NavLink >
                    </li>
                </ul>
            </div>

            <div className="p-4 pb-0 text-gray-900 md:pb-4 dark:text-white">
                <ul className="space-y-4">
                    <li>
                        <NavLink className="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500" to="/about">Garantías</NavLink >
                    </li>
                    <li>
                        <NavLink className="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500" to="/about">Rembolso</NavLink >
                    </li>
                    <li>
                        <NavLink className="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500" to="/about">Políticas de Venta</NavLink >
                    </li>
                </ul>
            </div>
            
            <div className="p-4">
                <ul className="space-y-4">
                    <li>
                        <NavLink className="text-gray-500 dark:text-gray-400 hover:text-blue-600 dark:hover:text-blue-500" to="/about">Facturación</NavLink >
                    </li>
                </ul>
            </div>   */}

        </div>
    </>
  )
}

Dropdown.propTypes  = {
    text: PropTypes.string ,
    options: PropTypes.array
}

export default Dropdown