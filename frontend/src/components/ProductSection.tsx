import { useContext } from "react";
import ProductCard from "./ProductCard";
import { ProductsContext } from "../App";

const ProductSection = () => {
  const products = useContext(ProductsContext);

  return (
    <section
      id="products"
      aria-labelledby="products-header"
      className="scroll-mt-24 gap-4 border-2 p-4"
    >
      <header>
        <h2
          id="products-header"
          className="text-center text-3xl font-extrabold"
        >
          OUR PRODUCTS
        </h2>
      </header>
      <div className="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
        {products.map((product) => (
          <ProductCard
            key={product.id}
            title={product.title}
            description={product.description}
            imageUrl={product.imageUrl}
            sizes={product.sizes}
          />
        ))}
      </div>
    </section>
  );
};

export default ProductSection;
