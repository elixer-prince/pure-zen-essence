import { createContext } from "react";
import type { Product } from "./products";

export const ProductsContext = createContext<Product[]>([]);
