import AboutSectionImage from "./../assets/about-image.png";

const AboutImage = () => {
  return (
    <img
      className="flex h-full w-full items-center justify-center object-cover object-center shadow-md shadow-black transition-all duration-500 hover:scale-110 hover:grayscale-0"
      src={AboutSectionImage}
      alt="Image goes here..."
    />
  );
};

export default AboutImage;
