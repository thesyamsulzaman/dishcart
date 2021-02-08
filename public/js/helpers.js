const truncate = (str, num) => {
  let finalStr = str;
  if (str.length > num) {
    finalStr = str.slice(0, num) + " ...";
  }

  return finalStr;
};

export { truncate };
