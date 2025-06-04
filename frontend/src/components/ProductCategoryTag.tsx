import type { RefObject } from "react";
import { useEffect, useState } from "react";

const ProductCategoryTag = ({
  keyProp,
  size,
  sizeRef,
  updatePrice,
}: {
  keyProp: string;
  size: { name: string; price: number };
  sizeRef: RefObject<HTMLDivElement | null>;
  updatePrice: (price: number) => void;
}) => {
  const [isSelected, setIsSelected] = useState<boolean>(false);

  useEffect(() => {
    if (sizeRef.current) {
      setIsSelected(true);
      console.log(`Size ${size.name} is selected`);
    }
  }, [size.name, sizeRef]);

  return (
    <div
      key={keyProp}
      className={`${isSelected && "bg-brand-green"} flex h-8 w-8 cursor-pointer items-center justify-center rounded-full border-2 p-2 font-black`}
      ref={sizeRef}
      onClick={() => {
        updatePrice(size.price);
        setIsSelected(!isSelected);
      }}
    >
      {size.name}
    </div>
  );
};

export default ProductCategoryTag;