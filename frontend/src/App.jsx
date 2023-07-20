import Layout from './Layout';
import Home from './Pages/Home';
import Products from './Pages/Products';
import { Routes, Route} from "react-router-dom";
import Login from './Pages/Login';
import Cart from './Pages/Cart';


function App() {

  return (
    <>
     <Routes>
        <Route path="/" element={<Layout />}>
          <Route index element={<Home />} />
          
          <Route path="Products" element={<Products />} />


          {/* About us dropdown */}
          <Route path="buy-process" element={<h1>buy proccess</h1>} />
          <Route path="check-plus" element={<h1>check plus</h1>} />
          <Route path="report-your-payment" element={<h1>report your payment</h1>} />
          <Route path="warranties" element={<h1>warranties</h1>} />
          <Route path="returns" element={<h1>returns</h1>} />
          <Route path="selling-policies" element={<h1>selling policies</h1>} />
          <Route path="invoices" element={<h1>invoices</h1>} />
          <Route path="cart" element={<Cart />} />

          {/* <Route path="dashboard" element={<Dashboard />} /> */}

          {/* Using path="*"" means "match anything", so this route
                acts like a catch-all for URLs that we don't have explicit
                routes for. */}
          {/* <Route path="*" element={<NoMatch />} /> */}
        </Route>
        <Route path="/login" element={<Login />} />
        <Route path="/register" element={<Login />} />
        
      </Routes>
    </>
  )
}

export default App
