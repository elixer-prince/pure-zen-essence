import PlaceholderImage from "../assets/landscape-placeholder.svg";

const TestimonialCard = () => {
  return (
    <article className="border-brand-darkblue flex h-full flex-col items-center gap-6 rounded-xl border-2 bg-white/10 p-8 shadow-lg transition-all duration-500 select-none hover:scale-105">
      <div className="border-brand-darkblue relative h-40 w-40 overflow-hidden rounded-full border-4">
        <img
          className="h-full w-full object-cover object-center transition-transform duration-500 hover:scale-110"
          src={PlaceholderImage}
          alt="Customer photo"
        />
      </div>
      <div className="flex flex-col items-center text-center">
        <h3 className="text-2xl font-black sm:text-3xl">Testimonial Name</h3>
        <p className="mt-4 text-base text-gray-400 sm:text-lg">
          <span className="from-brand-green to-brand-blue bg-linear-to-r bg-clip-text text-transparent">
            "
          </span>
          Testimonial Description
          <span className="from-brand-green to-brand-blue bg-linear-to-r bg-clip-text text-transparent">
            "
          </span>
        </p>
      </div>
    </article>
  );
};

export default TestimonialCard;
