// Dummy data until we have a backend database

type Product = {
  id: number;
  name: string;
  description: string;
  imageUrl: string;
  category: string;
  sizes: {
    name: string;
    price: number;
  }[];
};

export const products: Product[] = [
  {
    id: 1,
    name: "Product 1",
    description: "Description for Product 1",
    imageUrl: "https://via.placeholder.com/150",
    category: "Category 1",
    sizes: [
      { name: "xs", price: 9.99 },
      { name: "s", price: 12.99 },
      { name: "m", price: 15.99 },
    ],
  },
  {
    id: 2,
    name: "Product 2",
    description: "Description for Product 2",
    imageUrl: "https://via.placeholder.com/150",
    category: "Category 1",
    sizes: [],
  },
  // Add more products here
];
