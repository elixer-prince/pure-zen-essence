import { createContext } from "react";
import { Routes, Route } from "react-router-dom";
// Data
import products from "./products.ts";
// Pages
import HomePage from "./pages/HomePage";
import DashboardPage from "./pages/DashboardPage";
import LoginPage from "./pages/LoginPage.tsx";

export const ProductsContext = createContext([{}]);

const App = () => {
  return (
    <ProductsContext.Provider value={products}>
      <Routes>
        <Route path="/pure-zen-essence/" element={<HomePage />} />
        <Route path="/pure-zen-essence/dashboard" element={<DashboardPage />} />
        <Route path="/pure-zen-essence/login" element={<LoginPage />} />
      </Routes>
    </ProductsContext.Provider>
  );
};

export default App;
