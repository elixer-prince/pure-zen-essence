import AboutSectionImage from "./../assets/about-section-image.png";

const AboutImage = () => {
  return (
    <img
      className="flex h-full w-full items-center justify-center object-cover object-center grayscale transition-all hover:grayscale-0"
      src={AboutSectionImage}
      alt="Image goes here..."
    />
  );
};

export default AboutImage;
