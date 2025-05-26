import { createContext } from "react";
import { Routes, Route } from "react-router-dom";
import type { Product } from "./products.ts";
import products from "./products.ts";

import HomePage from "./pages/HomePage";
import DashboardPage from "./pages/DashboardPage";

export const ProductsContext = createContext<Product[]>([]);

const App = () => {
  return (
    <ProductsContext.Provider value={products}>
      <Routes>
        <Route path="/" element={<HomePage />} />
        <Route path="/dashboard" element={<DashboardPage />} />
        <Route
          path="/login"
          element={
            <>
              <h1>Login</h1>
              <a href="/">Back to home</a>
            </>
          }
        />
      </Routes>
    </ProductsContext.Provider>
  );
};

export default App;
