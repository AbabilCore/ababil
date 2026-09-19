import chalk from "chalk";
import data from "../data/index";

const about = (): string => `${chalk.bold("👤 About Me")}

  ~/ ${chalk.bold("Name")}            ${chalk.bold(":")}  ${data.about.name}
  ~/ ${chalk.bold("Profession")}      ${chalk.bold(":")}  ${data.about.profession}
  ~/ ${chalk.bold("Gmail")}           ${chalk.bold(":")}  ${chalk.blue.underline(data.contact.gmail)}

  ~/ ${chalk.bold("Location")}        ${chalk.bold(":")}  ${data.about.address}
  ~/ ${chalk.bold("WhatsApp")}        ${chalk.bold(":")}  ${chalk.cyan(data.contact.whatsapp)}
  ~/ ${chalk.bold("Website")}         ${chalk.bold(":")}  ${chalk.blue.underline(data.contact.website)}
  ~/ ${chalk.bold("GitHub")}          ${chalk.bold(":")}  ${chalk.blue.underline(data.contact.github)}
  ~/ ${chalk.bold("X (Twitter)")}     ${chalk.bold(":")}  ${chalk.blue.underline(data.contact.x)}
  ~/ ${chalk.bold("Discord")}         ${chalk.bold(":")}  ${chalk.blue.underline(data.contact.discord)}
  ~/ ${chalk.bold("Facebook")}        ${chalk.bold(":")}  ${chalk.blue.underline(data.contact.facebook)}
`;

export default about;
