import chalk from "chalk";
import data from "../data/index";

const skills = (): string => `
${chalk.bold("🚀 Skills Overview")}

  + ${chalk.cyan("Frontend")}         ${chalk.bold(":")}  ${data.skills.frontend.join(", ")}
  + ${chalk.green("Backend")}          ${chalk.bold(":")}  ${data.skills.backend.join(", ")}
  + ${chalk.greenBright("Database")}         ${chalk.bold(":")}  ${data.skills.database.join(", ")}
  + ${chalk.cyanBright("Languages")}        ${chalk.bold(":")}  ${data.skills.language.join(", ")}
  + ${chalk.cyan("Tools")}            ${chalk.bold(":")}  ${data.skills.tools.join(", ")}
`;

export default skills;
