import mongoose from "mongoose";
import Product from "../models/product.model.js";

export const getProducts = async (req, res) => {
  try {
    const products = await Product.find();
    res.status(200).json({ success: true, data: products });
  } catch (error) {
    console.error(`Error in Fetch Products: ${error.message}`);
    res.status(500).json({ message: "Server Error!" });
  }
};

export const createProduct = async (req, res) => {
  const product = req.body;

  if (!product.name || !product.shortDescription || !product.image) {
    return res
      .status(400)
      .json({ success: false, message: "All fields are required!" });
  }

  const newProduct = await Product.create(product);

  try {
    newProduct.save();
    res.status(200).json({ success: true, data: newProduct });
  } catch (error) {
    console.error(`Error in Create Product: ${error.message}`);
    res.status(500).json({ success: false, message: "Server Error!" });
  }
};

export const updateProduct = async (req, res) => {
  const { id } = req.params;
  const product = req.body;

  if (!mongoose.Types.ObjectId.isValid(id)) {
    return res.status(400).json({ success: false, message: "Invalid ID!" });
  }

  if (!product.name || !product.shortDescription || !product.image) {
    return res
      .status(400)
      .json({ success: false, message: "All fields are required!" });
  }

  try {
    const updatedProduct = await Product.findByIdAndUpdate(id, product, {
      new: true,
    });
    res.status(200).json({ success: true, data: updatedProduct });
  } catch (error) {
    console.error(`Error in Update Product: ${error.message}`);
    res.status(500).json({ message: "Server Error!" });
  }
};

export const deleteProduct = async (req, res) => {
  const { id } = req.params;

  if (!mongoose.Types.ObjectId.isValid(id)) {
    return res.status(400).json({ success: false, message: "Invalid ID!" });
  }

  try {
    await Product.findByIdAndDelete(id);
    res.status(200).json({ success: true, message: "Product Deleted!" });
  } catch (error) {
    console.error(`Error in Delete Product: ${error.message}`);
    res.status(500).json({ message: "Server Error!" });
  }
};
