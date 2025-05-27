import { createContext } from "react";
import { Routes, Route } from "react-router-dom";
import products from "./products.ts";

import HomePage from "./pages/HomePage";
import DashboardPage from "./pages/DashboardPage";
import LoginPage from "./pages/LoginPage.tsx";

export const ProductsContext = createContext([{}]);

const App = () => {
  return (
    <ProductsContext.Provider value={products}>
      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route path="/dashboard" element={<DashboardPage />} />
        <Route path="/login" element={<LoginPage />} />
      </Routes>
    </ProductsContext.Provider>
  );
};

export default App;
