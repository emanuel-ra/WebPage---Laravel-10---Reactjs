import Layout from './Layout';
import About from './Pages/About';
import Home from './Pages/Home';
import Products from './Pages/Products';
import { Routes, Route} from "react-router-dom";


function App() {

  return (
    <>
     <Routes>
        <Route path="/" element={<Layout />}>
          <Route index element={<Home />} />
          <Route path="about" element={<About />} />
          <Route path="Products" element={<Products />} />
          {/* <Route path="dashboard" element={<Dashboard />} /> */}

          {/* Using path="*"" means "match anything", so this route
                acts like a catch-all for URLs that we don't have explicit
                routes for. */}
          {/* <Route path="*" element={<NoMatch />} /> */}
        </Route>
      </Routes>
    </>
  )
}

export default App
