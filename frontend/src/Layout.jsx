
import Footer from "./components/Footers/Footer";
import Header from "./components/Headers/Header";

import { Outlet } from "react-router-dom";
function Layout() {
    return (
        <>
        <Header />
        <Outlet />
        <Footer />
        </>
    )
}

export default Layout