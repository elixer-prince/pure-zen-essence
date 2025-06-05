import { useRef, useState, useEffect } from "react";

// ASSETS
import PlaceholderImage from "../assets/landscape-placeholder.svg";

// REACT ICONS
import { MdArrowOutward } from "react-icons/md";
import { IoCloseCircle } from "react-icons/io5";

// COMPONENTS
import ProductCategoryTag from "./ProductCategoryTag";

type ProductProps = {
  imageUrl: string;
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

  const cardRef = useRef<HTMLDivElement | null>(null);
  const sizeRef = useRef<HTMLDivElement | null>(null);
  const priceRef = useRef<HTMLDivElement | null>(null);

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
  }, [sizes]);

  return (
    // Card Container
    <article className="h-128 perspective-midrange">
      {/* Card */}
      <div
        className={`${isFlipped && "rotate-y-180"} relative h-full transition-transform duration-500 select-none transform-3d hover:-translate-y-4`}
        ref={cardRef}
      >
        {/* Card Front */}
        <div className="border-brand-green absolute flex h-full w-full flex-col overflow-hidden rounded-tl-[4rem] rounded-tr-md rounded-br-[4rem] rounded-bl-md border-3 bg-white bg-linear-to-br shadow-md backface-hidden">
          <a
            className="h-120 overflow-hidden"
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
          <div className="flex h-full flex-col justify-between p-4">
            <div className="h-full">
              <h3 className="flex h-20 items-center text-4xl font-black">
                {title}
              </h3>
              <p className="mt-2 text-lg font-semibold text-neutral-600">
                {description}
              </p>
            </div>
            <div>
              <button
                className="to-brand-green from-brand-darkblue mt-8 flex cursor-pointer items-center gap-1 rounded-xl bg-linear-to-r px-6 py-4 text-lg font-black text-white backface-hidden"
                onClick={flipCard}
              >
                More Info <MdArrowOutward className="text-3xl" />
              </button>
            </div>
          </div>
        </div>
        {/* Card Back */}
        <div className="border-brand-green absolute h-full w-full rotate-y-180 rounded-tr-[4rem] rounded-bl-[4rem] border-3 bg-white px-8 py-4 backface-hidden">
          <IoCloseCircle
            className="text-brand-green absolute top-4 right-6 cursor-pointer rounded-full bg-white text-5xl shadow-md transition-transform duration-500 hover:scale-110"
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
