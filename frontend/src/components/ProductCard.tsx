import { useRef, useState, useEffect } from "react";
import PlaceholderImage from "../assets/landscape-placeholder.svg";
import { MdArrowOutward } from "react-icons/md";
import { IoCloseCircle } from "react-icons/io5";
import ProductCategoryTag from "./ProductCategoryTag";

type ProductProps = {
  imageUrl?: string;
  title: string;
  description?: string;
  sizes?: {
    name: string;
    price: number;
  }[];
};

const ProductCard = ({
  imageUrl = PlaceholderImage,
  title = "Product Title",
  description = "Product description...",
  sizes = [{ name: "xx", price: 0 }],
}: ProductProps) => {
  const [isFlipped, setIsFlipped] = useState<boolean>(false);
  const [price, setPrice] = useState<number>(0);

  const cardRef = useRef<HTMLDivElement>(null);
  const sizeRef = useRef<HTMLDivElement>(null);
  const priceRef = useRef<HTMLDivElement>(null);

  const flipCard = () => {
    if (cardRef.current) {
      setIsFlipped(!isFlipped);
    }
  };

  const updatePrice = (currentPrice: number) => {
    if (priceRef.current) {
      setPrice(currentPrice);
    }
  };

  useEffect(() => {
    if (sizes.length > 0) {
      setPrice(sizes[0].price);
    }
  }, []);

  return (
    // Card Container
    <article className="h-124 perspective-midrange">
      {/* Card */}
      <div
        className={`${isFlipped && "rotate-y-180"} relative h-full transition-transform duration-500 select-none transform-3d hover:-translate-y-4`}
        ref={cardRef}
      >
        {/* Card Front */}
        <div className="border-brand-green border-bl-md absolute flex h-full w-full flex-col overflow-hidden rounded-tl-[4rem] rounded-br-[4rem] border-3 bg-white bg-linear-to-br shadow-md backface-hidden">
          <a
            className="h-56 overflow-hidden"
            href={imageUrl}
            target="_blank"
            rel="noopener noreferrer"
          >
            <img
              className="h-full w-full object-cover transition-transform duration-500 hover:scale-110"
              src={imageUrl}
              alt=""
            />
          </a>
          <div className="h-56 p-4">
            <div>
              <h3 className="text-4xl font-black">{title}</h3>
              <p className="mt-2 text-lg">{description}</p>
            </div>
            <div>
              <button
                className="to-brand-green from-brand-darkblue mt-8 flex cursor-pointer items-center gap-1 rounded-xl bg-linear-to-r px-6 py-4 font-black text-white backface-hidden"
                onClick={flipCard}
              >
                More Info <MdArrowOutward className="text-2xl" />
              </button>
            </div>
          </div>
        </div>
        {/* Card Back */}
        <div className="border-brand-green absolute h-full w-full rotate-y-180 rounded-tr-[4rem] rounded-bl-[4rem] border-2 bg-white px-8 py-4 backface-hidden">
          <IoCloseCircle
            className="text-brand-green absolute top-4 right-6 cursor-pointer rounded-full bg-white text-5xl transition-transform duration-500 hover:scale-105"
            onClick={flipCard}
          />
          <div>
            <h3 className="text-brand-darkblue mt-8 text-lg font-black">
              {title}
            </h3>
            <div className="mt-2 text-4xl font-black" ref={priceRef}>
              $<span className="text-brand-green">{price.toFixed(2)}</span>
            </div>
            <div className="mt-4 flex gap-4 text-sm">
              {sizes.map((size) => (
                <ProductCategoryTag
                  key={size.name}
                  keyProp={size.name}
                  size={size}
                  sizeRef={sizeRef}
                  updatePrice={updatePrice}
                />
              ))}
            </div>
            <ul>
              <p className="mt-4 mb-2 text-2xl font-bold">Benefits:</p>
              <li>Benefit 1</li>
              <li>Benefit 2</li>
              <li>Benefit 3</li>
              <li>Benefit 4</li>
            </ul>
          </div>
        </div>
      </div>
    </article>
  );
};

export default ProductCard;
