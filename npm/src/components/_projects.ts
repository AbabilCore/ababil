import chalk from "chalk";
import wrapAnsi from "wrap-ansi";
import data from "../data/index";

const project = data.projects;
const terminalWidth = process.stdout.columns || 80;

interface Project {
  label: string;
  source: string;
  description: string;
}

const formatItem = (p: Project): string => {
  const bullet = chalk.green("•");
  const title = chalk.bold.white(p.label);
  const desc = wrapAnsi(chalk.gray(p.description), terminalWidth - 4, {
    hard: false,
  });
  const source = chalk.blue.underline(p.source);

  return [`${bullet} ${title}`, `  → ${desc}`, `  Source: ${source}`].join(
    "\n",
  );
};

const projects = (): string => `
${chalk.greenBright.bold("🌐 Featured Projects:")}

${[
  project.cutefetch,
  project["emoji-picker"],
  project.sigla,
  project.siteviews,
  project["react-siteviews"],
  project["make-public"],
  project["gen-table"],
  project["mongoose-qb"],
  project["jobx-cli"],
]
  .map(formatItem)
  .join("\n\n")}
`;

export default projects;
