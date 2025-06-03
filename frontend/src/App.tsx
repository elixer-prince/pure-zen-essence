import { Routes, Route } from "react-router-dom";

// IMPORTED DATA
import { ProductsContext } from "./context.tsx";
import products from "./products.ts";

// WEBSITE PAGES
import HomePage from "./pages/HomePage";
import DashboardPage from "./pages/DashboardPage";
import LoginPage from "./pages/LoginPage.tsx";

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
