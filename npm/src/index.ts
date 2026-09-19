/**
 * @packageName     ababil
 * @description     CLI portfolio for Ababil Hossain
 * @author          Ababil Hossain <ababil.webdev@gmail.com>
 * @license         MIT
 * @version         2.0.4
 * @repository      https://github.com/AbabilCore/ababil.git
 * @created         2024-03-02
 * @lastModified    2026-03-10
 **/

import boxen from "boxen";
import { log } from "console";
import header from "./components/_header";
import about from "./components/_about";
import skills from "./components/_skills";
import projects from "./components/_projects";
import footer from "./components/_footer";

const content = boxen(
  `${header()}
${about()}
${skills()}
${projects()}
${footer()}`,
  {
    padding: 0.5,
    borderStyle: "round",
    borderColor: "green",
    width: 87,
    title: "AbabilCore CLI README",
  },
);

log(content);
