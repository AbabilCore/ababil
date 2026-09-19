import gradient from "gradient-string";
import boxen from "boxen";
import data from "../data/index";

const header = (): string =>
  gradient.pastel.multiline(`${boxen(
    `=============================================
👋 Hi, I'm ${data.about.name}
💻 ${data.about.profession}
=============================================`,
    { textAlignment: "center", width: 82, borderStyle: "singleDouble" },
  )}
`);

export default header;
