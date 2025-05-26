// Dummy data until we have a backend database
import ColdPressedCoconutOilImage from "./assets/products/cold-pressed-coconut-oil.jpeg";
import CastorCoconutOilImage from "./assets/products/castor-coconut-oil.jpeg";
import ColdPressedCastorOilImage from "./assets/products/cold-pressed-castor-oil.jpeg";
import BeardOilImage from "./assets/products/beard-oil.jpeg";
import NeemAndMintBarSoapImage from "./assets/products/neem-and-mint-bar-soap.jpeg";
import CharcoalBarSoapImage from "./assets/products/charcoal-bar-soap.jpeg";
import RosemaryOilImage from "./assets/products/rosemary-oil.jpeg";

export type Product = {
  id: number;
  title: string;
  description: string;
  imageUrl: string;
  category: string;
  sizes: {
    name: string;
    price: number;
  }[];
};

const products: Product[] = [
  {
    id: 1,
    title: "Cold Pressed Coconut Oil",
    description: "Pure and organic coconut oil for all your beauty needs.",
    imageUrl: ColdPressedCoconutOilImage,
    category: "Oils",
    sizes: [
      { name: "xs", price: 9.99 },
      { name: "s", price: 12.99 },
      { name: "m", price: 15.99 },
    ],
  },
  {
    id: 2,
    title: "Castor Coconut Oil",
    description: "Pure and organic coconut oil for all your beauty needs.",
    imageUrl: CastorCoconutOilImage,
    category: "Oils",
    sizes: [
      { name: "xs", price: 9.99 },
      { name: "s", price: 12.99 },
      { name: "m", price: 15.99 },
    ],
  },
  {
    id: 3,
    title: "Cold Pressed Castor Oil",
    description: "Pure and organic coconut oil for all your beauty needs.",
    imageUrl: ColdPressedCastorOilImage,
    category: "Oils",
    sizes: [
      { name: "xs", price: 9.99 },
      { name: "s", price: 12.99 },
      { name: "m", price: 15.99 },
    ],
  },
  {
    id: 4,
    title: "Beard Oil",
    description: "Description for Product 2",
    imageUrl: BeardOilImage,
    category: "Oils",
    sizes: [],
  },
  {
    id: 5,
    title: "Rosemary Oil",
    description: "Description for Product 2",
    imageUrl: RosemaryOilImage,
    category: "Oils",
    sizes: [],
  },
  {
    id: 6,
    title: "Neem & Mint Bar Soap",
    description: "Description for Product 2",
    imageUrl: NeemAndMintBarSoapImage,
    category: "Bar Soaps",
    sizes: [],
  },
  {
    id: 7,
    title: "Charcoal Bar Soap",
    description: "Description for Product 2",
    imageUrl: CharcoalBarSoapImage,
    category: "Bar Soaps",
    sizes: [],
  },
];

export default products;
