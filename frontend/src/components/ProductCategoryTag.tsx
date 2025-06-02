// import { useEffect, useState } from "react";

// /**
//  * A clickable tag that displays a product size. When clicked, it calls the
//  * given `updatePrice` function with the price of the size.
//  *
//  * @param {{ name: string, price: number }} size - The size to display,
//  *   including its name and price.
//  * @param {React.RefObject<HTMLDivElement> | null} sizeRef - A ref to the
//  *   containing HTML element of the size.
//  * @param {(price: number) => void} updatePrice - A function to call when the
//  *   size is clicked, passing the price of the size.
//  */

// const ProductCategoryTag = ({
//   keyProp,
//   size,
//   sizeRef,
//   updatePrice,
// }: {
//   keyProp: string;
//   size: { name: string; price: number };
//   sizeRef: any;
//   updatePrice: (price: number) => void;
// }) => {
//   const [isSelected, setIsSelected] = useState<boolean>(false);

//   useEffect(() => {
//     if (sizeRef.current) {
//       // Set first element to be true only

//       setIsSelected(true);
//       console.log(`Size ${size.name} is selected`);
//     }
//   }, []);

//   return (
//     <div
//       key={keyProp}
//       className={`${isSelected && "bg-brand-green"} flex h-8 w-8 cursor-pointer items-center justify-center rounded-full border-2 p-2 font-black`}
//       ref={sizeRef}
//       onClick={() => {
//         updatePrice(size.price);
//         setIsSelected(!isSelected);
//       }}
//     >
//       {size.name}
//     </div>
//   );
// };

// export default ProductCategoryTag;
