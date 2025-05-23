import express from "express";
import cors from "cors";
import { connectDB } from "./config/db.js";
import productRoutes from "./routes/product.route.js";

const app = express();
const PORT = process.env.PORT;

// MIDDLEWARE
app.use(cors());
app.use(express.json());

// ROUTES
app.use("/api/products", productRoutes);

// Connection
app.listen(PORT, () => {
  connectDB();
  console.log(`Server is running on http://localhost:${PORT}`);
});
