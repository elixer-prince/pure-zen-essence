const FaqQuestion = ({ question }: { question: string }) => {
  return (
    <details className="rounded-full bg-white">
      <summary className="cursor-pointer rounded-full border border-none bg-linear-to-r from-black to-black/95 px-8 py-4 text-xl font-bold text-white">
        {question}
      </summary>
      <p>Answer 1</p>
    </details>
  );
};

export default FaqQuestion;
