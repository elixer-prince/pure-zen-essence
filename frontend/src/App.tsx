import { createContext } from "react";
import { Routes, Route } from "react-router-dom";
// Data
import products from "./products.ts";
import type { Product } from "./products.ts";
// Pages
import HomePage from "./pages/HomePage";
import DashboardPage from "./pages/DashboardPage";
import LoginPage from "./pages/LoginPage.tsx";

export type { Product };

export const ProductsContext = createContext<Product[]>([{} as Product]);

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
